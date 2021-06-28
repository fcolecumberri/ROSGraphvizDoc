<?php
// file: /tmp/ros_RGD/jsk_recognition/checkerboard_detector/src/objectdetection_transform_echo.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('checkerboard_detector', 'objectdetection_transform_echo', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('pose', 'geometry_msgs', 'PoseStamped')
;