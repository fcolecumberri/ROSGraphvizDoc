<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/image_time_diff.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'image_time_diff', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output/diff', 'jsk_recognition_msgs', 'ImageDifferenceValue')
	->publish_topic('~output/diff_image', 'sensor_msgs', 'Image')
	->subscribe_topic('~start', 'std_msgs', 'Header')
	->subscribe_topic('~stop', 'std_msgs', 'Header')
;