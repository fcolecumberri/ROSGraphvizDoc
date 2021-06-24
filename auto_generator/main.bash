#! /usr/bin/bash

IFS=$'\n'
REPOS=''
OUT_DIR=$(pwd)/ros_pkgs
mkdir -p $OUT_DIR
for ROS_SINGLE_PATH in $(echo $ROS_PACKAGE_PATH | tr ":" "\n")
do
	REPOS+=$'\n'
	pushd $ROS_SINGLE_PATH > /dev/null
		REPOS+=$(find . -name 'package.xml' -exec xpath -q -e '//url[@type="repository"]/text()' {} + | grep git | sort | uniq)
	popd > /dev/null
done

# REPOS=(
# 	https://github.com/ROBOTIS-GIT/turtlebot3_simulations
# )

REPOS=$(printf "%s\n" "${REPOS[@]}" | sort | uniq)

mkdir -p /tmp/ros_RGD
pushd /tmp/ros_RGD > /dev/null
	for GIT_REPO in ${REPOS[@]}
	do
		git clone $GIT_REPO > /dev/null 2>&1
		GIT_REPO_DIR=$(echo $GIT_REPO | rev | cut -d '/' -f1 | rev)
		if [ ! -d "$GIT_REPO_DIR" ]
		then
			sleep 15
			git clone $GIT_REPO > /dev/null 2>&1
		fi
		if [ ! -d "$GIT_REPO_DIR" ]
		then
			sleep 30 # The FLiKING University network sometimes goes down
			git clone $GIT_REPO > /dev/null 2>&1
		fi
		if [ ! -d "$GIT_REPO_DIR" ]
		then
			sleep 30
			git clone $GIT_REPO
		fi
		if [ ! -d "$GIT_REPO_DIR" ]
		then
			echo "$GIT_REPO could not be cloned"
		else
			echo "Working Repo: $GIT_REPO"
			pushd $GIT_REPO_DIR > /dev/null
				PKG_FILES=$(find . -name 'package.xml')
				for PKG_FILE in $PKG_FILES
				do
					PKG_DIRECTORY=$(dirname $PKG_FILE)
					pushd $PKG_DIRECTORY > /dev/null
						PKG_NAME=$(xpath -q -e '//name/text()' 'package.xml')
						mkdir -p "$OUT_DIR/$PKG_NAME/nodes"
						echo "$GIT_REPO" > "$OUT_DIR/$PKG_NAME/repo"
						CXX_NODE_FILES=$(grep -roz "ros::init([^;]*;" | grep -a ':' |  cut -d ':' -f1)
						for CXX_NODE_FILE in $CXX_NODE_FILES
						do
							NODE_NAME=$(grep -hoz "ros::init([^;]*;" $CXX_NODE_FILE | grep -ao '"[^"]*"' | cut -f2 -d '"')
							if [ -z "$NODE_NAME" ]
							then
								OUT_FILE="$OUT_DIR/$PKG_NAME/nodes/$NODE_NAME.php"
								echo "<?php" > $OUT_FILE
								echo "// file: $CXX_NODE_FILE" >> $OUT_FILE
								echo "include_once(dirname(__FILE__).\"/../../RGDcore/RGD.php\");" >> $OUT_FILE
								echo "RGD::node('$PKG_NAME', '$NODE_NAME')" >> $OUT_FILE
								########################################################################
								TOPIC_PUBS=$(grep -h "\\.advertise<[^;]*;" $CXX_NODE_FILE)
								for TOPIC_PUB in $TOPIC_PUBS
								do
									TOPIC_PKG=$(echo $TOPIC_PUB | grep -ao "\\.advertise<[^>]*>" | grep -ao "<[^:]*:" | sed 's/<//g' | sed 's/://g')
									TOPIC_MSG=$(echo $TOPIC_PUB | grep -ao "\\.advertise<[^>]*>" | grep -ao ":[^>:]*>" | sed 's/>//g' | sed 's/://g')
									TOPIC_NAME=$(echo $TOPIC_PUB | grep -ao '"[^"]*"' | cut -f2 -d '"')
									if [ -z "$TOPIC_NAME" ] && [ -z "$TOPIC_PKG" ] && [ -z "$TOPIC_MSG" ]
									then
										echo -e "\t->publish_topic('$TOPIC_NAME', '$TOPIC_PKG', '$TOPIC_MSG')" >> $OUT_FILE
									fi
								done
								########################################################################
								TOPIC_CALLBACK_DECLARATIONS=$(grep -h "::ConstPtr" $CXX_NODE_FILE | grep -v "return")
								for TOPIC_CALLBACK_DECLARATION in $TOPIC_CALLBACK_DECLARATIONS
								do
									FUNCTION_NAME=$(echo $TOPIC_CALLBACK_DECLARATION | grep -ao "void [^(]*(" | sed 's/void //g' | sed 's/(//g' | xargs)
									if [ -z "$FUNCTION_NAME" ]
									then
										TOPIC_PKG=$(echo $TOPIC_CALLBACK_DECLARATION | grep -ao "const [^:]*:" | sed 's/const //g' | sed 's/://g')
										TOPIC_MSG=$(echo $TOPIC_CALLBACK_DECLARATION | grep -ao "::[^:]*::ConstPtr" | sed 's/::ConstPtr//g' | sed 's/://g')
										if [ ! -z "$FUNCTION_NAME" ]
										then
											TOPIC_NAME=$(grep -h "\\.subscribe" $CXX_NODE_FILE | grep $FUNCTION_NAME | grep -ao '"[^"]*"' | xargs)
										fi
										if [ -z "$TOPIC_NAME" ] && [ -z "$TOPIC_PKG" ] && [ -z "$TOPIC_MSG" ]
										then
											echo -e "\t->subscribe_topic('$TOPIC_NAME', '$TOPIC_PKG', '$TOPIC_MSG')" >> $OUT_FILE
										fi
									fi
								done
								########################################################################
								SERVICE_CALLBACK_DECLARATIONS=$(grep -h "::Request" $CXX_NODE_FILE | grep -v "return")
								for SERVICE_CALLBACK_DECLARATION in $SERVICE_CALLBACK_DECLARATIONS
								do
									FUNCTION_NAME=$(echo $SERVICE_CALLBACK_DECLARATION | grep -ao " [^( ]*(" | sed 's/(//g' | xargs)
									if [ -z "$FUNCTION_NAME" ]
									then
										SERVICE_PKG=$(echo $SERVICE_CALLBACK_DECLARATION | grep -ao "([^:]*:" | sed 's/(//g' | sed 's/://g')
										SERVICE_MSG=$(echo $SERVICE_CALLBACK_DECLARATION | grep -ao "::[^:]*::Request" | sed 's/::Request//g' | sed 's/://g')
										if [ ! -z "$FUNCTION_NAME" ]
										then
											SERVICE_NAME=$(grep -h "\\.advertiseService" $CXX_NODE_FILE | grep $FUNCTION_NAME | grep -ao '"[^"]*"' | xargs)
										fi
										if [ -z "$SERVICE_NAME" ] && [ -z "$SERVICE_PKG" ] && [ -z "$SERVICE_MSG" ]
										then
											echo -e "\t->advertise_service('$SERVICE_NAME', '$SERVICE_PKG', '$SERVICE_MSG')" >> $OUT_FILE
										fi
									fi
								done
								########################################################################
								SERVICE_CLIS=$(grep -h "\\.serviceClient<[^;]*;" $CXX_NODE_FILE)
								for SERVICE_CLI in $SERVICE_CLIS
								do
									SERVICE_PKG=$(echo $SERVICE_CLI | grep -ao "\\.serviceClient<[^>]*>" | grep -ao "<[^:]*:" | sed 's/<//g' | sed 's/://g')
									SERVICE_MSG=$(echo $SERVICE_CLI | grep -ao "\\.serviceClient<[^>]*>" | grep -ao ":[^>:]*>" | sed 's/>//g' | sed 's/://g')
									SERVICE_NAME=$(echo $SERVICE_CLI | grep -ao '"[^"]*"' | cut -f2 -d '"')
									if [ -z "$SERVICE_NAME" ] && [ -z "$SERVICE_PKG" ] && [ -z "$SERVICE_MSG" ]
									then
										echo -e "\t->consume_service('$TOPIC_NAME', '$TOPIC_PKG', '$TOPIC_MSG')" >> $OUT_FILE
									fi
								done
								########################################################################
								ACTION_PUBS=$(grep -h "\\SimpleActionServer<[^;]*;" $CXX_NODE_FILE)
								for ACTION_PUB in $ACTION_PUBS
								do
									ACTION_PKG=$(echo $ACTION_PUB | grep -ao "\\.SimpleActionServer<[^>]*>" | grep -ao "<[^:]*:" | sed 's/<//g' | sed 's/://g')
									ACTION_MSG=$(echo $ACTION_PUB | grep -ao "\\.SimpleActionServer<[^>]*>" | grep -ao ":[^>:]*>" | sed 's/>//g' | sed 's/://g')
									ACTION_NAME=$(echo $ACTION_PUB | grep -ao '"[^"]*"' | cut -f2 -d '"')
									if [ -z "$ACTION_NAME" ] && [ -z "$ACTION_PKG" ] && [ -z "$ACTION_MSG" ]
									then
										echo -e "\t->advertise_action('$ACTIONAME', '$ACTIONKG', '$ACTIONSG')" >> $OUT_FILE
									fi
								done
								########################################################################
								ACTION_SUBS=$(grep -h "\\SimpleActionClient<[^;]*;" $CXX_NODE_FILE)
								for ACTION_SUB in $ACTION_SUBS
								do
									ACTION_PKG=$(echo $ACTION_SUB | grep -ao "\\.SimpleActionClient<[^>]*>" | grep -ao "<[^:]*:" | sed 's/<//g' | sed 's/://g')
									ACTION_MSG=$(echo $ACTION_SUB | grep -ao "\\.SimpleActionClient<[^>]*>" | grep -ao ":[^>:]*>" | sed 's/>//g' | sed 's/://g')
									ACTION_NAME=$(echo $ACTION_SUB | grep -ao '"[^"]*"' | cut -f2 -d '"')
									if [ -z "$ACTION_NAME" ] && [ -z "$ACTION_PKG" ] && [ -z "$ACTION_MSG" ]
									then
										echo -e "\t->consume_action('$ACTIONAME', '$ACTIONKG', '$ACTIONSG')" >> $OUT_FILE
									fi
								done
								########################################################################
								echo -e ";" >> $OUT_FILE
							fi
						done
						# python
						PY_NODE_FILES=$(grep -roz "rospy.init_node([.]*" | grep -a ':' |  cut -d ':' -f1)
						for PY_NODE_FILE in $PY_NODE_FILES
						do
							NODE_NAME=$(grep -ho "rospy.init_node([^,)]*[,)]" $PY_NODE_FILE | sed 's/rospy.init_node(//g' | sed "s/'//g" | sed 's/"//g' | sed 's/,//g' | sed 's/)//g')
							if [ -z "$NODE_NAME" ]
							then
								OUT_FILE="$OUT_DIR/$PKG_NAME/nodes/$NODE_NAME.php"
								echo "<?php" > $OUT_FILE
								echo "// file: $CXX_NODE_FILE" >> $OUT_FILE
								echo "include_once(dirname(__FILE__).\"/../../RGDcore/RGD.php\");" >> $OUT_FILE
								echo "RGD::node('$PKG_NAME', '$NODE_NAME')" >> $OUT_FILE
								########################################################################
								TOPIC_PUBS=$(grep -h "rospy.Publisher" $PY_NODE_FILE)
								for TOPIC_PUB in $TOPIC_PUBS
								do
									TOPIC_NAME=$(echo $TOPIC_PUB | grep -ho "(.*)" | sed "s/(//g" | sed "s/)//g" | cut -d ',' -f1 | sed "s/'//g" | sed 's/"//g' | xargs)
									TOPIC_MSG=$(echo $TOPIC_PUB | grep -ho "(.*)" | sed "s/(//g" | sed "s/)//g" | cut -d ',' -f2 | xargs)
									if [ ! -z "$TOPIC_MSG" ]
									then
										TOPIC_PKG=$(grep -h "from" $PY_NODE_FILE | grep $TOPIC_MSG | grep -ho "[^ ]*.msg" | sed "s/\\.msg//g")
									fi
									if [ ! -z "$TOPIC_NAME" ] && [ ! -z "$TOPIC_PKG" ] && [ ! -z "$TOPIC_MSG" ]
									then
										echo -e "\t->publish_topic('$TOPIC_NAME', '$TOPIC_PKG', '$TOPIC_MSG')" >> $OUT_FILE
									fi
								done
								########################################################################
								TOPIC_SUBS=$(grep -h "rospy.Subscriber" $PY_NODE_FILE)
								for TOPIC_SUB in $TOPIC_SUBS
								do
									TOPIC_NAME=$(echo $TOPIC_SUB | grep -ho "(.*)" | sed "s/(//g" | sed "s/)//g" | cut -d ',' -f1 | sed "s/'//g" | sed 's/"//g' | xargs)
									TOPIC_MSG=$(echo $TOPIC_SUB | grep -ho "(.*)" | sed "s/(//g" | sed "s/)//g" | cut -d ',' -f2 | xargs)
									if [ ! -z "$TOPIC_MSG" ]
									then
										TOPIC_PKG=$(grep -h "from" $PY_NODE_FILE | grep $TOPIC_MSG | grep -ho "[^ ]*.msg" | sed "s/\\.msg//g")
									fi
									if [ ! -z "$TOPIC_NAME" ] && [ ! -z "$TOPIC_PKG" ] && [ ! -z "$TOPIC_MSG" ]
									then
										echo -e "\t->subscribe_topic('$TOPIC_NAME', '$TOPIC_PKG', '$TOPIC_MSG')" >> $OUT_FILE
									fi
								done
								# ########################################################################
								SERVICE_ADVS=$(grep -h "rospy.Service" $PY_NODE_FILE)
								for SERVICE_ADV in $SERVICE_ADVS
								do
									SERVICE_NAME=$(echo $SERVICE_ADV | grep -ho "(.*)" | sed "s/(//g" | sed "s/)//g" | cut -d ',' -f1 | sed "s/'//g" | sed 's/"//g' | xargs)
									SERVICE_MSG=$(echo $SERVICE_ADV | grep -ho "(.*)" | sed "s/(//g" | sed "s/)//g" | cut -d ',' -f2 | xargs)
									if [ ! -z "$SERVICE_MSG" ]
									then
										SERVICE_PKG=$(grep -h "from" $PY_NODE_FILE | grep $SERVICE_MSG | grep -ho "[^ ]*.srv" | sed "s/\\.srv//g")
									fi
									if [ ! -z "$SERVICE_NAME" ] && [ ! -z "$SERVICE_PKG" ] && [ ! -z "$SERVICE_MSG" ]
									then
										echo -e "\t->advertise_service('$SERVICE_NAME', '$SERVICE_PKG', '$SERVICE_MSG')" >> $OUT_FILE
									fi
								done
								# ########################################################################
								SERVICE_CLIS=$(grep -h "rospy.Service" $PY_NODE_FILE)
								for SERVICE_CLI in $SERVICE_CLIS
								do
									SERVICE_NAME=$(echo $SERVICE_CLI | grep -ho "(.*)" | sed "s/(//g" | sed "s/)//g" | cut -d ',' -f1 | sed "s/'//g" | sed 's/"//g' | xargs)
									SERVICE_MSG=$(echo $SERVICE_CLI | grep -ho "(.*)" | sed "s/(//g" | sed "s/)//g" | cut -d ',' -f2 | xargs)
									if [ ! -z "$SERVICE_MSG" ]
									then
										SERVICE_PKG=$(grep -h "from" $PY_NODE_FILE | grep $SERVICE_MSG | grep -ho "[^ ]*.srv" | sed "s/\\.srv//g")
									fi
									if [ ! -z "$SERVICE_NAME" ] && [ ! -z "$SERVICE_PKG" ] && [ ! -z "$SERVICE_MSG" ]
									then
										echo -e "\t->consume_service('$SERVICE_NAME', '$SERVICE_PKG', '$SERVICE_MSG')" >> $OUT_FILE
									fi
								done
								########################################################################
								# ToDo: actions adv
								########################################################################
								# ToDo: actions consume
								########################################################################
								echo -e ";" >> $OUT_FILE
							fi
						done
						#launch
						LAUNCH_FILES=$(grep -roz "<launch>" | grep -a ':' |  cut -d ':' -f1)
						for LAUNCH_FILE in $LAUNCH_FILES
						do
							LAUNCH_FILE_OUT_NAME=$(basename $LAUNCH_FILE | sed "s/\.launch$//g")
							OUT_FILE="$OUT_DIR/$PKG_NAME/launch/$LAUNCH_FILE_OUT_NAME.php"
							mkdir -p $(dirname $OUT_FILE)
							echo "<?php" > $OUT_FILE
							echo "include_once(dirname(__FILE__).\"/../../RGDcore/RGD.php\");" >> $OUT_FILE
							INCLUDES=$(xpath -q -e '//include' $LAUNCH_FILE)
							for INCLUDE in $INCLUDES
							do
								echo "INCLUDE: $INCLUDE"
								NODE_PKG=$(basename $(echo $INCLUDE | grep -o "(find [^)]*)" | sed 's/(find//g' | sed 's/)//g' | xargs))
								NODE_NAME=$(basename $(echo $INCLUDE | grep -o "file=\"[^\"]*\"" | sed 's/"//g' | sed 's/(find//g' | sed 's/)//g' | xargs))
								echo "NODE_PKG: $NODE_PKG"
								echo "NODE_NAME: $NODE_NAME"
								if [ ! -z "$NODE_PKG" ] && [ ! -z "$NODE_NAME" ]
								then
									echo "RGD::include('$NODE_PKG/nodes/$NODE_NAME');" >> $OUT_FILE
								fi
							done
							NODES=$(xpath -q -e '//node' $LAUNCH_FILE)
							for NODE in $NODES
							do
								NODE_PKG=$(echo $NODE | grep -o 'pkg="[^"]*"' | grep -o '"[^"]*"' | sed 's/"//g')
								NODE_NAME=$(echo $NODE | grep -o 'type="[^"]*"' | grep -o '"[^"]*"' | sed 's/"//g' | cut -f1 -d '.')
								if [ ! -z "$NODE_PKG" ] && [ ! -z "$NODE_NAME" ]
								then
									echo "RGD::include('$NODE_PKG/nodes/$NODE_NAME');" >> $OUT_FILE
								fi
							done
						done
					popd > /dev/null
				done
			popd > /dev/null
			rm -rf $GIT_REPO_DIR
		fi
	done
popd > /dev/null
