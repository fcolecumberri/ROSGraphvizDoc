<?php
// file: /tmp/ros_RGD/turtlebot3/turtlebot3_slam/src/flat_world_imu_node.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('turtlebot3_slam', 'flat_world_imu_node', 'https://github.com/ROBOTIS-GIT/turtlebot3', ProgresState::ros_official)
	->publish_topic('imu_out', 'sensor_msgs', 'Imu')
;