<?php
// file: /tmp/ros_RGD/common_tutorials/turtle_actionlib/src/shape_server.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('turtle_actionlib', 'turtle_shape', 'https://github.com/ros/common_tutorials', ProgresState::ros_official)
	->publish_topic('/turtle1/cmd_vel', 'geometry_msgs', 'Twist')
	->subscribe_topic('/turtle1/pose', 'turtlesim', 'Pose')
;