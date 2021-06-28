<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/tool/range_sensor_error_visualization.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'range_sensor_error_visualization', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('output/mean', 'sensor_msgs', 'Image')
	->publish_topic('output/variance', 'sensor_msgs', 'Image')
	->publish_topic('output/stddev', 'sensor_msgs', 'Image')
	->publish_topic('output/variance_plot', 'jsk_recognition_msgs', 'PlotData')
	->publish_topic('output/stddev_plot', 'jsk_recognition_msgs', 'PlotData')
	->subscribe_topic('input', 'sensor_msgs', 'LaserScan')
;