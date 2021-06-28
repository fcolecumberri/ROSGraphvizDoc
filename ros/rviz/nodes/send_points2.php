<?php
// file: /tmp/ros_RGD/rviz/src/test/send_point_cloud_2.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'send_points2', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('points2', 'sensor_msgs', 'PointCloud2')
;