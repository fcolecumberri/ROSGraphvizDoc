<?php
// file: /tmp/ros_RGD/geometry_tutorials/turtle_tf2/nodes/turtle_tf2_message_broadcaster.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('turtle_tf2', 'turtle_tf2_msg_broadcaster', 'https://github.com/ros/geometry_tutorials', ProgresState::ros_official)
	->publish_topic('turtle_point_stamped', 'geometry_msgs', 'PointStamped')
	->publish_topic('turtle3/cmd_vel', '', 'geometry_msgs.msg.Twist')
	->subscribe_topic('/%s/pose', '', 'turtlesim.msg.Pose')
	->consume_service('spawn', '', 'turtlesim.srv.Spawn')
;