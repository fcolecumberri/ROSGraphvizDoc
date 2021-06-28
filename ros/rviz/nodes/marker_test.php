<?php
// file: /tmp/ros_RGD/rviz/src/test/arrow_marker_test.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'marker_test', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('marker_test', 'visualization_msgs', 'Marker')
;