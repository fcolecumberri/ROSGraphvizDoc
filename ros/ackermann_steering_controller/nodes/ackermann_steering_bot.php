<?php
// file: /tmp/ros_RGD/ros_controllers/ackermann_steering_controller/test/common/src/ackermann_steering_bot.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('ackermann_steering_controller', 'ackermann_steering_bot', 'https://github.com/ros-controls/ros_controllers', ProgresState::ros_official)
;