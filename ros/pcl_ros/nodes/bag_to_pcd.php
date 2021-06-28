<?php
// file: /tmp/ros_RGD/perception_pcl/pcl_ros/tools/bag_to_pcd.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('pcl_ros', 'bag_to_pcd', 'https://github.com/ros-perception/perception_pcl', ProgresState::ros_official)
;