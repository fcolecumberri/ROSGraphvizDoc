<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/scripts/xyz_to_screenpoint.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros_utils', 'xyz_to_screenpoint', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output', 'geometry_msgs', 'PointStamped')
	->subscribe_topic('~input/camera_info', 'sensor_msgs', 'CameraInfo')
	->subscribe_topic('~input', 'geometry_msgs', 'PointStamped')
;