<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/scripts/in_hand_recognition_manager.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'in_hand_recognition_manager', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output/recognition', 'geometry_msgs', 'PoseStamped')
	->publish_topic('~output', 'geometry_msgs', 'PoseStamped')
	->subscribe_topic('~input', 'geometry_msgs', 'PoseStamped')
	->subscribe_topic('~input/result', 'geometry_msgs', 'PoseStamped')
	->advertise_service('~renew', '', 'srv.Empty')
;