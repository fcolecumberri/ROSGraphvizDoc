<?php
// file: /tmp/ros_RGD/rviz/src/test/send_covariance_msgs.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'test_covariance', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('pose_with_cov', 'geometry_msgs', 'PoseWithCovarianceStamped')
	->publish_topic('pose', 'geometry_msgs', 'PoseStamped')
;