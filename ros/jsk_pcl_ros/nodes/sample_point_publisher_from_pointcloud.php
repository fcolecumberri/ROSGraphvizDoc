<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_point_publisher_from_pointcloud.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'sample_point_publisher_from_pointcloud', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output', 'geometry_msgs', 'PointStamped')
	->subscribe_topic('~input', 'sensor_msgs', 'PointCloud2')
;