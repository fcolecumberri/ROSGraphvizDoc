<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/scripts/tracking_info.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'tracking_info', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~rms_angle_error', 'std_msgs', 'Float32')
	->subscribe_topic('~rms_distance_error', 'std_msgs', 'Float32')
;