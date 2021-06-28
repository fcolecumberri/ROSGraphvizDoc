<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/scripts/marker_appender.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'marker_appender', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('marker_array', 'visualization_msgs', 'MarkerArray')
	->subscribe_topic('marker', 'visualization_msgs', 'Marker')
;