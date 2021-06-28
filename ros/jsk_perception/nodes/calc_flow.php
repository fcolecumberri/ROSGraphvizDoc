<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/src/calc_flow.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'calc_flow', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('flow_image', 'sensor_msgs', 'Image')
;