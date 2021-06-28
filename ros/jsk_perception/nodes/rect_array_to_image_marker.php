<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/rect_array_to_image_marker.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'rect_array_to_image_marker', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input', 'jsk_recognition_msgs', 'RectArray')
;