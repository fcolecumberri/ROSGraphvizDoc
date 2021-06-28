<?php
// file: /tmp/ros_RGD/ros_tutorials/turtlesim/tutorials/draw_square.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('turtlesim', 'draw_square', 'https://github.com/ros/ros_tutorials', ProgresState::ros_official)
	->publish_topic('turtle1/cmd_vel', 'geometry_msgs', 'Twist')
	->consume_service('reset', 'std_srvs', 'Empty')
;