<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/scripts/renew_tracking.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'send_renew_model', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('selected_pointcloud', 'sensor_msgs', 'PointCloud2')
	->consume_service('particle_filter_tracker/renew_model', 'jsk_recognition_msgs', 'SetPointCloud2')
;