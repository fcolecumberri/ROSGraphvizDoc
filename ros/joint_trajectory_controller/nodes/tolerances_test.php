<?php
// file: /tmp/ros_RGD/ros_controllers/joint_trajectory_controller/test/tolerances_test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('joint_trajectory_controller', 'tolerances_test', 'https://github.com/ros-controls/ros_controllers', ProgresState::ros_official)
;