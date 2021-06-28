<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_recognition_utils/node_scripts/polygon_array_to_polygon.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_recognition_utils', 'polygon_array_to_polygon', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input', 'jsk_recognition_msgs', 'PolygonArray')
;