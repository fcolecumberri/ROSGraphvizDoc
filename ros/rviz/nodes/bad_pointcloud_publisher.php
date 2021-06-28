<?php
// file: /tmp/ros_RGD/rviz/src/test/send_bad_pc2.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'bad_pointcloud_publisher', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('bad_pointcloud', 'sensor_msgs', 'PointCloud2')
;