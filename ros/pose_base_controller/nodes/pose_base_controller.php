<?php
// file: /tmp/ros_RGD/navigation_experimental/pose_base_controller/src/pose_base_controller.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('pose_base_controller', 'pose_base_controller', 'https://github.com/ros-planning/navigation_experimental.git', ProgresState::ros_official)
	->publish_topic('base_controller/command', 'geometry_msgs', 'Twist')
;