<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/scripts/tracker_status_info.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'tracker_status_info', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input', 'jsk_recognition_msgs', 'TrackerStatus')
;