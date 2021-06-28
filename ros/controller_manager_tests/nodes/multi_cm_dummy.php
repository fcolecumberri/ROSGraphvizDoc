<?php
// file: /tmp/ros_RGD/ros_control/controller_manager_tests/test/multi_cm_dummy.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('controller_manager_tests', 'multi_cm_dummy', 'https://github.com/ros-controls/ros_control', ProgresState::ros_official)
	->advertise_service('/bad_type/unload_controller', 'controller_manager_msgs', 'LoadController')
;