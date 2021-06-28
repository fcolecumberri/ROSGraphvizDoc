<?php
// file: /tmp/ros_RGD/ros_control/controller_manager/scripts/controller_manager
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('controller_manager', 'controller_manager', 'https://github.com/ros-controls/ros_control', ProgresState::ros_official)
	->subscribe_topic('', '', 'Msg')
;