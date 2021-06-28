<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/scripts/color_histogram_visualizer.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'color_histogram_visualizer', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input', 'jsk_recognition_msgs', 'ColorHistogram')
	->subscribe_topic('~input/array', 'jsk_recognition_msgs', 'ColorHistogramArray')
;