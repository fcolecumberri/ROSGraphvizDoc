<?php
// file: /tmp/ros_RGD/rviz/src/test/map_test.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'map_test', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('', 'nav_msgs', 'OccupancyGrid')
;