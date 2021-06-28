<?php
// file: /tmp/ros_RGD/ros_control/controller_manager/scripts/spawner
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('controller_manager', 'spawner', 'https://github.com/ros-controls/ros_control', ProgresState::ros_official)
	->subscribe_topic('', '', 'Bool')
	->consume_service('', '', 'UnloadController')
	->consume_service('', '', 'SwitchController')
	->consume_service('', '', 'LoadController')
	->consume_service('', '', 'SwitchController')
;