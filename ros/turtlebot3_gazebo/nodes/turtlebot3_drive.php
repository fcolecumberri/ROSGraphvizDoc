<?php
// file: /tmp/ros_RGD/turtlebot3_simulations/turtlebot3_gazebo/src/turtlebot3_drive.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('turtlebot3_gazebo', 'turtlebot3_drive', 'https://github.com/ROBOTIS-GIT/turtlebot3_simulations', ProgresState::ros_official)
	->publish_topic('cmd_vel_topic_name', 'geometry_msgs', 'Twist')
;