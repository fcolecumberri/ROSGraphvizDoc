<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/scripts/check_depth_error/depth_error_calibration.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'depth_error_logistic_regression', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~frequency_image', 'sensor_msgs', 'Image')
	->publish_topic('~error_plot_image', 'sensor_msgs', 'Image')
	->subscribe_topic('depth_image_error/output', 'jsk_recognition_msgs', 'DepthErrorResult')
	->consume_service('/camera_remote/depth_calibration/set_calibration_parameter', 'jsk_recognition_msgs', 'SetDepthCalibrationParameter')
;