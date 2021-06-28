<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/src/sample_cube_nearest_point.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'cube_nearest_point', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('nearest_point', 'geometry_msgs', 'PointStamped')
	->publish_topic('bbox_array', 'jsk_recognition_msgs', 'BoundingBoxArray')
;