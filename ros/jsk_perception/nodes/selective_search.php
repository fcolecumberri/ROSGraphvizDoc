<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/selective_search.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'selective_search', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input', 'sensor_msgs', 'Image')
;