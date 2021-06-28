<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/matchtemplate.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'match_template', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('current_template', 'sensor_msgs', 'Image')
	->publish_topic('result', '', 'TransformStamped')
	->publish_topic('debug_image', 'sensor_msgs', 'Image')
;