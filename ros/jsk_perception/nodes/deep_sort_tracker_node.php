<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/deep_sort_tracker_node.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'deep_sort_tracker_node', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output/viz', 'sensor_msgs', 'Image')
	->publish_topic('~output/labels', 'jsk_recognition_msgs', 'LabelArray')
;