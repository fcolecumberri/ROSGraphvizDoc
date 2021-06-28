<?php
// file: /tmp/ros_RGD/ros_tutorials/rospy_tutorials/010_publish_pointcloud2/publish_pointcloud2.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rospy_tutorials', 'pc2_publisher', 'https://github.com/ros/ros_tutorials', ProgresState::ros_official)
	->publish_topic('points2', 'sensor_msgs', 'PointCloud2')
;