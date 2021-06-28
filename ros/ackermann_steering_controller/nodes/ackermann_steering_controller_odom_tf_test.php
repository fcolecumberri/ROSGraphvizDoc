<?php
// file: /tmp/ros_RGD/ros_controllers/ackermann_steering_controller/test/ackermann_steering_controller_odom_tf_test/ackermann_steering_controller_odom_tf_test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('ackermann_steering_controller', 'ackermann_steering_controller_odom_tf_test', 'https://github.com/ros-controls/ros_controllers', ProgresState::ros_official)
;