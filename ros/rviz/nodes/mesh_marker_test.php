<?php
// file: /tmp/ros_RGD/rviz/src/test/mesh_marker_test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'mesh_marker_test', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('mesh_markers', 'visualization_msgs', 'Marker')
;