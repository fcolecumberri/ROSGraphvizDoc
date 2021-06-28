<?php
// file: /tmp/ros_RGD/stage_ros/test/intensity_test.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('stage_ros', 'ranger_intensity_test', 'https://github.com/ros-simulation/stage_ros', ProgresState::ros_official)
	->subscribe_topic('', 'sensor_msgs', 'LaserScan')
;