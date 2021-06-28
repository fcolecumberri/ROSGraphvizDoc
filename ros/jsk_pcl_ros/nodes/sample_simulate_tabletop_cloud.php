<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_simulate_tabletop_cloud.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'sample_simulate_tabletop_cloud', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output', 'sensor_msgs', 'PointCloud2')
	->publish_topic('~output/polygon', 'jsk_recognition_msgs', 'PolygonArray')
	->publish_topic('~output/coef', 'jsk_recognition_msgs', 'ModelCoefficientsArray')
	->publish_topic('~output/candidate_boxes', '', 'BoundingBoxArray')
	->consume_service('/plane_supported_cuboid_estimator/reset', 'std_srvs', 'Empty')
;