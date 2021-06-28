<?php
// file: /tmp/ros_RGD/perception_pcl/pcl_ros/tools/convert_pcd_to_image.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('pcl_ros', 'image_publisher', 'https://github.com/ros-perception/perception_pcl', ProgresState::ros_official)
	->publish_topic('output', 'sensor_msgs', 'Image')
;