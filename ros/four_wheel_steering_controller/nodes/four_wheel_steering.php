<?php
// file: /tmp/ros_RGD/ros_controllers/four_wheel_steering_controller/test/src/four_wheel_steering.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('four_wheel_steering_controller', 'four_wheel_steering', 'https://github.com/ros-controls/ros_controllers', ProgresState::ros_official)
	->publish_topic('/clock', 'rosgraph_msgs', 'Clock')
;