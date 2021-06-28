<?php
// file: /tmp/ros_RGD/ros_controllers/four_wheel_steering_controller/test/src/four_wheel_steering_wrong_config.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('four_wheel_steering_controller', 'four_wheel_steering_wrong_config_test', 'https://github.com/ros-controls/ros_controllers', ProgresState::ros_official)
;