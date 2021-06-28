<?php
// file: /tmp/ros_RGD/rviz/src/test/marker_array_test.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'register', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('', 'visualization_msgs', 'MarkerArray')
;