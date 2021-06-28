<?php
// file: /tmp/ros_RGD/rviz/src/test/send_lots_of_points_node.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'send_lots_of_points', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('lots_of_points', 'sensor_msgs', 'PointCloud')
;