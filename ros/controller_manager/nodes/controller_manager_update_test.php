<?php
// file: /tmp/ros_RGD/ros_control/controller_manager/test/hwi_update_test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('controller_manager', 'controller_manager_update_test', 'https://github.com/ros-controls/ros_control', ProgresState::ros_official)
;