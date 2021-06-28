<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/scripts/plane_time_ensync_for_recognition.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'time_ensync', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('ensynced_planes', 'jsk_recognition_msgs', 'PolygonArray')
	->publish_topic('ensynced_planes_coefficients', 'jsk_recognition_msgs', 'ModelCoefficientsArray')
	->subscribe_topic('timer', 'sensor_msgs', 'PointCloud2')
	->subscribe_topic('planes', 'jsk_recognition_msgs', 'PolygonArray')
	->subscribe_topic('planes_coefficients', 'jsk_recognition_msgs', 'ModelCoefficientsArray')
;