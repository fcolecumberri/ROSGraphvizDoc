<?php
// file: /tmp/ros_RGD/stage_ros/src/stageros.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('stage_ros', 'stageros', 'https://github.com/ros-simulation/stage_ros', ProgresState::ros_official)
	->publish_topic('ODOM', 'nav_msgs', 'Odometry')
	->publish_topic('BASE_POSE_GROUND_TRUTH', 'nav_msgs', 'Odometry')
	->publish_topic('BASE_SCAN', 'sensor_msgs', 'LaserScan')
	->publish_topic('BASE_SCAN', 'sensor_msgs', 'LaserScan')
	->publish_topic('IMAGE', 'sensor_msgs', 'Image')
	->publish_topic('DEPTH', 'sensor_msgs', 'Image')
	->publish_topic('CAMERA_INFO', 'sensor_msgs', 'CameraInfo')
	->publish_topic('IMAGE', 'sensor_msgs', 'Image')
	->publish_topic('DEPTH', 'sensor_msgs', 'Image')
	->publish_topic('CAMERA_INFO', 'sensor_msgs', 'CameraInfo')
	->publish_topic('/clock', 'rosgraph_msgs', 'Clock')
	->advertise_service('reset_positions', 'std_srvs', 'Empty')
;