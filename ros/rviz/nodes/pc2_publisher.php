<?php
// file: /tmp/ros_RGD/rviz/src/test/send_point_cloud_2.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'pc2_publisher', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('points2', 'sensor_msgs', 'PointCloud2')
;