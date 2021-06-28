<?php
// file: /tmp/ros_RGD/ros_controllers/joint_trajectory_controller/test/rrbot_wrapping.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('joint_trajectory_controller', 'rrbot_wrapping', 'https://github.com/ros-controls/ros_controllers', ProgresState::ros_official)
;