<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/src/rectangle_detector.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'edge_detector', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('rectangle/image', 'sensor_msgs', 'Image')
;