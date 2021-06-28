<?php
// file: /tmp/ros_RGD/rviz/src/test/send_two_clouds.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'send_two_clouds', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('cloud1', 'sensor_msgs', 'PointCloud')
	->publish_topic('cloud2', 'sensor_msgs', 'PointCloud')
;