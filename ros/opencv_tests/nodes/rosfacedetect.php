<?php
// file: /tmp/ros_RGD/vision_opencv/opencv_tests/nodes/rosfacedetect.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('opencv_tests', 'rosfacedetect', 'https://github.com/ros-perception/vision_opencv', ProgresState::ros_official)
	->subscribe_topic('', '', 'sensor_msgs.msg.Image')
	->subscribe_topic('', '', 'sensor_msgs.msg.CompressedImage')
;