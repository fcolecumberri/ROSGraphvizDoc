<?php
// file: /tmp/ros_RGD/perception_pcl/pcl_ros/tools/convert_pointcloud_to_image.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('pcl_ros', 'convert_pointcloud_to_image', 'https://github.com/ros-perception/perception_pcl', ProgresState::ros_official)
	->publish_topic('image_topic_', 'sensor_msgs', 'Image')
;