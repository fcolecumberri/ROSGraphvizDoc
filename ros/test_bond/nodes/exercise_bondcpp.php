<?php
// file: /tmp/ros_RGD/bond_core/test_bond/test/exercise_bond.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_bond', 'exercise_bondcpp', 'https://github.com/ros/bond_core', ProgresState::ros_official)
	->consume_service('test_bond', 'test_bond', 'TestBond')
;