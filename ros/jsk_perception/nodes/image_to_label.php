<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/image_to_label.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'image_to_label', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input', 'sensor_msgs', 'Image')
;