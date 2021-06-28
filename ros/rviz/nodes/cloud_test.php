<?php
// file: /tmp/ros_RGD/rviz/src/test/cloud_test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'cloud_test', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('rgb_cloud_test', 'sensor_msgs', 'PointCloud')
	->publish_topic('rgb_cloud_test2', 'sensor_msgs', 'PointCloud')
	->publish_topic('intensity_cloud_test', 'sensor_msgs', 'PointCloud')
	->publish_topic('million_points_cloud_test', 'sensor_msgs', 'PointCloud')
	->publish_topic('changing_channels_test', 'sensor_msgs', 'PointCloud')
;