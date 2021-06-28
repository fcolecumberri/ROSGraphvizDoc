<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/pcl_roi_robot.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/head_pointcloud_mux.php');
RGD::import('ros/topic_tools/nodes/l_hand_pointcloud_mux.php');
RGD::import('ros/topic_tools/nodes/r_hand_pointcloud_mux.php');
RGD::import('ros/nodelet/nodes/pcl_roi_robot_manager.php');
RGD::import('ros/nodelet/nodes/pcl_roi_robot_manager.php');
RGD::import('ros/nodelet/nodes/voxel_grid_manager.php');
RGD::import('ros/nodelet/nodes/l_hand_voxel_grid_manager.php');
RGD::import('ros/nodelet/nodes/r_hand_voxel_grid_manager.php');
