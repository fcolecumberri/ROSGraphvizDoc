<?php
// file: /tmp/ros_RGD/bond_core/test_bond/test/test_callbacks_py.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_bond', 'test_callbacks_python', 'https://github.com/ros/bond_core', ProgresState::ros_official)
;