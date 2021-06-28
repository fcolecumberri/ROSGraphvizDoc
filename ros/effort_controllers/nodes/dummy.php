<?php
// file: /tmp/ros_RGD/ros_controllers/effort_controllers/test/simple_bot_goto_position.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('effort_controllers', 'dummy', 'https://github.com/ros-controls/ros_controllers', ProgresState::ros_official)
	->publish_topic('position_controller/command', 'std_msgs', 'Float64')
;