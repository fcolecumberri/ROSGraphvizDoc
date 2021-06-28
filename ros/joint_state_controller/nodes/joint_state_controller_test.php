<?php
// file: /tmp/ros_RGD/ros_controllers/joint_state_controller/test/joint_state_controller_test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('joint_state_controller', 'joint_state_controller_test', 'https://github.com/ros-controls/ros_controllers', ProgresState::ros_official)
;