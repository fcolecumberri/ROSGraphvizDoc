<?php
// file: /tmp/ros_RGD/navigation_experimental/assisted_teleop/src/assisted_teleop.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('assisted_teleop', 'assisted_teleop', 'https://github.com/ros-planning/navigation_experimental.git', ProgresState::ros_official)
	->publish_topic('cmd_vel', 'geometry_msgs', 'Twist')
;