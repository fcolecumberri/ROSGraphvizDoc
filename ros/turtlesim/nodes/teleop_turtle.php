<?php
// file: /tmp/ros_RGD/ros_tutorials/turtlesim/tutorials/teleop_turtle_key.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('turtlesim', 'teleop_turtle', 'https://github.com/ros/ros_tutorials', ProgresState::ros_official)
	->publish_topic('turtle1/cmd_vel', 'geometry_msgs', 'Twist')
;