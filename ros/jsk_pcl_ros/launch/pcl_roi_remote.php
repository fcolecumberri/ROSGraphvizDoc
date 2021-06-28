<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/pcl_roi_remote.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_interactive_marker/nodes/roi_point_cloud_config_marker.php');
RGD::import('ros/nodelet/nodes/pcl_roi_remote_manager.php');
RGD::import('ros/nodelet/nodes/voxel_grid_decoder.php');
RGD::import('ros/nodelet/nodes/l_hand_voxel_grid_decoder.php');
RGD::import('ros/nodelet/nodes/r_hand_voxel_grid_decoder.php');
