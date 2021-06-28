<?php
// file: /tmp/ros_RGD/ros_controllers/effort_controllers/test/simple_bot_hw.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('effort_controllers', 'simple_bot_hw', 'https://github.com/ros-controls/ros_controllers', ProgresState::ros_official)
	->publish_topic('/clock', 'rosgraph_msgs', 'Clock')
;