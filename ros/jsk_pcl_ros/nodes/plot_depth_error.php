<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/scripts/dump_depth_error.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'plot_depth_error', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~scatter', 'jsk_recognition_msgs', 'PlotData')
	->subscribe_topic('/depth_image_error/output', 'jsk_recognition_msgs', 'DepthErrorResult')
;