<?php
// file: /tmp/ros_RGD/perception_pcl/pcl_ros/tools/pcd_to_pointcloud.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('pcl_ros', 'pcd_to_pointcloud', 'https://github.com/ros-perception/perception_pcl', ProgresState::ros_official)
;