<?php
// file: /tmp/ros_RGD/ros_control/combined_robot_hw_tests/test/combined_robot_hw_test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('combined_robot_hw_tests', 'CombinedRobotHWTestNode', 'https://github.com/ros-controls/ros_control', ProgresState::ros_official)
;