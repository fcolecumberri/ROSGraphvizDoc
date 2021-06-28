<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_recognition_utils/node_scripts/rect_array_to_cluster_point_indices.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_recognition_utils', 'rect_array_to_cluster_point_indices', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input', 'jsk_recognition_msgs', 'RectArray')
;