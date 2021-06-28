<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/scripts/calculate_polygon_from_imu.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'calc_imu_plane', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('polygon_array', 'jsk_recognition_msgs', 'PolygonArray')
	->publish_topic('model_coefficients_array', 'jsk_recognition_msgs', 'ModelCoefficientsArray')
	->subscribe_topic('imu_data', 'sensor_msgs', 'Imu')
;