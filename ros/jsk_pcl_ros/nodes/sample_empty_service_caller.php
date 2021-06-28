<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_empty_service_caller.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'sample_empty_service_caller', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->consume_service('~service', 'std_srvs', 'Empty')
;