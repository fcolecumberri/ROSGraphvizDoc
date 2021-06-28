<?php
// file: /tmp/ros_RGD/nodelet_core/test_nodelet/test/test_bond_break_on_shutdown.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_nodelet', 'test_bond_break_on_shutdown', 'https://github.com/ros/nodelet_core', ProgresState::ros_official)
;