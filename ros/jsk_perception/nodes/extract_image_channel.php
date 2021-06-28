<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/extract_image_channel.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'extract_image_channel', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input', 'jsk_perception', 'Image')
;