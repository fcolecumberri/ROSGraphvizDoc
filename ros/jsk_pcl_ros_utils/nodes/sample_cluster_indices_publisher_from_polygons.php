<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_bounding_box_publisher_from_pointcloud.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros_utils', 'sample_cluster_indices_publisher_from_polygons', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output', 'jsk_recognition_msgs', 'BoundingBox')
	->subscribe_topic('~input', 'sensor_msgs', 'PointCloud2')
;