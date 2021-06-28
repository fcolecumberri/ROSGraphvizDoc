<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_octree_voxel_grid.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/nodelet/nodes/$(arg manager).php');
RGD::import('ros/nodelet/nodes/depth_to_points.php');
RGD::import('ros/nodelet/nodes/octree_voxel_grid.php');
RGD::import('ros/rviz/nodes/rviz.php');
