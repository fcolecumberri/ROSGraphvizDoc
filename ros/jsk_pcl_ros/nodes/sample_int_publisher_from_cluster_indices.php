<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_int_publisher_from_cluster_indices.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'sample_int_publisher_from_cluster_indices', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output', 'jsk_recognition_msgs', 'Int32Stamped')
	->subscribe_topic('~input', 'jsk_recognition_msgs', 'ClusterPointIndices')
;