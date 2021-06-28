<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/test/test_extract_indices.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'test_extract_indices', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('output', 'sensor_msgs', 'PointCloud2')
	->publish_topic('output/even_indices', 'pcl_msgs', 'PointIndices')
	->publish_topic('output/odd_indices', 'pcl_msgs', 'PointIndices')
	->subscribe_topic('input/even_result', 'sensor_msgs', 'PointCloud2')
	->subscribe_topic('input/odd_result', 'sensor_msgs', 'PointCloud2')
	->subscribe_topic('input/even_organized_result', 'sensor_msgs', 'PointCloud2')
	->subscribe_topic('input/odd_organized_result', 'sensor_msgs', 'PointCloud2')
;