<?php
// file: /tmp/ros_RGD/jsk_recognition/checkerboard_detector/src/checkerboard_detector.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('checkerboard_detector', 'checkerboard_detector', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('ObjectDetection', 'posedetection_msgs', 'ObjectDetection')
	->publish_topic('objectdetection_pose', 'geometry_msgs', 'PoseStamped')
	->publish_topic('corner_point', 'geometry_msgs', 'PointStamped')
	->publish_topic('polygons', 'jsk_recognition_msgs', 'PolygonArray')
	->publish_topic('debug_image', 'sensor_msgs', 'Image')
	->publish_topic('ObjectDetection', 'posedetection_msgs', 'ObjectDetection')
	->publish_topic('objectdetection_pose', 'geometry_msgs', 'PoseStamped')
	->publish_topic('corner_point', 'geometry_msgs', 'PointStamped')
	->publish_topic('polygons', 'jsk_recognition_msgs', 'PolygonArray')
	->publish_topic('debug_image', 'sensor_msgs', 'Image')
	->advertise_service('Detect', 'posedetection_msgs', 'Detect')
;