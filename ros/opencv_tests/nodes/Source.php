<?php
// file: /tmp/ros_RGD/vision_opencv/opencv_tests/nodes/broadcast.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('opencv_tests', 'Source', 'https://github.com/ros-perception/vision_opencv', ProgresState::ros_official)
	->publish_topic('', '', 'sensor_msgs.msg.Image')
	->publish_topic('/compressed', '', 'sensor_msgs.msg.CompressedImage')
;