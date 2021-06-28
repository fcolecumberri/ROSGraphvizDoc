<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_voxel_grid_large_scale.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/pointcloud_xyzrgb_to_xyz.php');
RGD::import('ros/nodelet/nodes/voxel_grid_large_scale.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/play_rosbag_pr2_sink.php');
