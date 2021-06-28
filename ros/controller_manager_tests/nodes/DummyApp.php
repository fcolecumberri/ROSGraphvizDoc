<?php
// file: /tmp/ros_RGD/ros_control/controller_manager_tests/src/dummy_app.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('controller_manager_tests', 'DummyApp', 'https://github.com/ros-controls/ros_control', ProgresState::ros_official)
;