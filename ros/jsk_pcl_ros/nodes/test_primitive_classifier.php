<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/test/simulate_primitive_shape_on_plane.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'test_primitive_classifier', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output/plane', 'jsk_recognition_msgs', 'PolygonArray')
	->publish_topic('~output/cloud', 'sensor_msgs', 'PointCloud2')
;