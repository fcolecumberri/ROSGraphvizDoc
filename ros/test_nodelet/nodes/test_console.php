<?php
// file: /tmp/ros_RGD/nodelet_core/test_nodelet/test/test_console.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_nodelet', 'test_console', 'https://github.com/ros/nodelet_core', ProgresState::ros_official)
;