<?php
// file: /tmp/ros_RGD/rviz/src/test/publish_test_map.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'test_map', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('test_map', 'nav_msgs', 'OccupancyGrid')
;