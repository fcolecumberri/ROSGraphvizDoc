<?php
// file: /tmp/ros_RGD/ros_controllers/diff_drive_controller/test/skidsteerbot.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('diff_drive_controller', 'skidsteerbot', 'https://github.com/ros-controls/ros_controllers', ProgresState::ros_official)
	->publish_topic('/clock', 'rosgraph_msgs', 'Clock')
;