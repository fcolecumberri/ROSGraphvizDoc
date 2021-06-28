<?php
// file: /tmp/ros_RGD/ros_tutorials/turtlesim/tutorials/mimic.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('turtlesim', 'turtle_mimic', 'https://github.com/ros/ros_tutorials', ProgresState::ros_official)
	->publish_topic('cmd_vel', 'geometry_msgs', 'Twist')
;