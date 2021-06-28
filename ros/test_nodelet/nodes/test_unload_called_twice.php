<?php
// file: /tmp/ros_RGD/nodelet_core/test_nodelet/test/test_unload_called_twice.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_nodelet', 'test_unload_called_twice', 'https://github.com/ros/nodelet_core', ProgresState::ros_official)
;