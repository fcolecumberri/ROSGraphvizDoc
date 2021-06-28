<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_pointcloud_localization_client.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'sample_pointcloud_localization_client', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->consume_service('~localize', 'std_srvs', 'Empty')
;