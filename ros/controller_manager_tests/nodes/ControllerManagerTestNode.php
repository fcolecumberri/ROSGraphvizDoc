<?php
// file: /tmp/ros_RGD/ros_control/controller_manager_tests/test/cm_test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('controller_manager_tests', 'ControllerManagerTestNode', 'https://github.com/ros-controls/ros_control', ProgresState::ros_official)
	->consume_service('/controller_manager/load_controller', '', '')
	->consume_service('/controller_manager/unload_controller', '', '')
	->consume_service('/controller_manager/load_controller', '', '')
	->consume_service('/controller_manager/unload_controller', '', '')
	->consume_service('/controller_manager/load_controller', '', '')
	->consume_service('/controller_manager/unload_controller', '', '')
	->consume_service('/controller_manager/switch_controller', '', '')
	->consume_service('/controller_manager/load_controller', '', '')
	->consume_service('/controller_manager/unload_controller', '', '')
	->consume_service('/controller_manager/switch_controller', '', '')
	->consume_service('/controller_manager/list_controller_types', '', '')
	->consume_service('/controller_manager/load_controller', '', '')
	->consume_service('/controller_manager/unload_controller', '', '')
	->consume_service('/controller_manager/switch_controller', '', '')
	->consume_service('/controller_manager/list_controllers', '', '')
	->consume_service('/controller_manager/load_controller', '', '')
	->consume_service('/controller_manager/unload_controller', '', '')
	->consume_service('/controller_manager/switch_controller', '', '')
	->consume_service('/controller_manager/list_controllers', '', '')
;