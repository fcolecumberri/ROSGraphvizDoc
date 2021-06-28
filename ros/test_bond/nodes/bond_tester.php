<?php
// file: /tmp/ros_RGD/bond_core/test_bond/scripts/tester.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_bond', 'bond_tester', 'https://github.com/ros/bond_core', ProgresState::ros_official)
	->publish_topic('', 'bond', 'Status')
	->subscribe_topic('', 'bond', 'Status')
	->advertise_service('test_bond', 'test_bond', 'TestBond')
;