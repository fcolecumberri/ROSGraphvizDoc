<?php
// file: /tmp/ros_RGD/perception_pcl/pcl_ros/samples/pcl_ros/filters/sample_voxel_grid.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/pcl_ros/nodes/pcd_to_pointcloud.php');
RGD::import('ros/nodelet/nodes/voxel_grid.php');
RGD::import('ros/rviz/nodes/rviz.php');
