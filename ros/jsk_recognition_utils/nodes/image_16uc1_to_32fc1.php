<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_recognition_utils/node_scripts/image_16uc1_to_32fc1.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_recognition_utils', 'image_16uc1_to_32fc1', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input', 'sensor_msgs', 'Image')
;