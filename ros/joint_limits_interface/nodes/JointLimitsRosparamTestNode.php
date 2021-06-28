<?php
// file: /tmp/ros_RGD/ros_control/joint_limits_interface/test/joint_limits_rosparam_test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('joint_limits_interface', 'JointLimitsRosparamTestNode', 'https://github.com/ros-controls/ros_control', ProgresState::ros_official)
;