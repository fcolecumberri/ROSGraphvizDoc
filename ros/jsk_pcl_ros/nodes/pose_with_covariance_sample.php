<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/pose_with_covariance_sample.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'pose_with_covariance_sample', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output', 'geometry_msgs', 'PoseWithCovarianceStamped')
;