<?php
// file: /tmp/ros_RGD/ros_control/controller_manager/scripts/unspawner
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('controller_manager', 'unspawner', 'https://github.com/ros-controls/ros_control', ProgresState::ros_official)
	->consume_service('controller_manager/switch_controller', '', 'SwitchController')
	->consume_service('controller_manager/list_controllers', '', 'ListControllers')
;