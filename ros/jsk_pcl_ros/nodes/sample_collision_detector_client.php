<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_collision_detector_client.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'sample_collision_detector_client', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output', 'std_msgs', 'Bool')
	->subscribe_topic('~joint_states', 'sensor_msgs', 'JointState')
	->consume_service('~check_collision', 'jsk_recognition_msgs', 'CheckCollision')
;