<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_camera_info_and_pointcloud_publisher.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros_utils', 'sample_camera_info_and_pointcloud_publisher', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~info', 'sensor_msgs', 'CameraInfo')
	->publish_topic('~cloud', 'sensor_msgs', 'PointCloud2')
;