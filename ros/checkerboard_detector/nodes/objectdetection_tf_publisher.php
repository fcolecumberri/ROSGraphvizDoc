<?php
// file: /tmp/ros_RGD/jsk_recognition/checkerboard_detector/src/objectdetection_tf_publisher.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('checkerboard_detector', 'objectdetection_tf_publisher', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('ObjectDetection', 'posedetection_msgs', 'ObjectDetection')
	->subscribe_topic('ObjectDetection', 'posedetection_msgs', 'ObjectDetection')
	->consume_service('/set_dynamic_tf', '', 'SetDynamicTF')
;