<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_topic_ensync_for_capture_stereo_synchronizer.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'sample_topic_ensync_for_capture_stereo_synchronizer', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output/pose', 'geometry_msgs', 'PoseStamped')
	->publish_topic('~output/mask', 'sensor_msgs', 'Image')
	->publish_topic('~output/mask_indices', 'pcl_msgs', 'PointIndices')
	->publish_topic('~output/left_image', 'sensor_msgs', 'Image')
	->publish_topic('~output/left_camera_info', 'sensor_msgs', 'CameraInfo')
	->publish_topic('~output/right_camera_info', 'sensor_msgs', 'CameraInfo')
	->publish_topic('~output/disparity', 'stereo_msgs', 'DisparityImage')
	->subscribe_topic('~input/pose', 'geometry_msgs', 'PoseStamped')
	->subscribe_topic('~input/mask', 'sensor_msgs', 'Image')
	->subscribe_topic('~input/mask_indices', 'pcl_msgs', 'PointIndices')
	->subscribe_topic('~input/left_image', 'sensor_msgs', 'Image')
	->subscribe_topic('~input/left_camera_info', 'sensor_msgs', 'CameraInfo')
	->subscribe_topic('~input/right_camera_info', 'sensor_msgs', 'CameraInfo')
	->subscribe_topic('~input/disparity', 'stereo_msgs', 'DisparityImage')
;