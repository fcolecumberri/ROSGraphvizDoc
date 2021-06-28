<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/fcn_object_segmentation.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'fcn_object_segmentation', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input', 'sensor_msgs', 'Image')
;