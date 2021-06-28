<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/convex_connected_voxels.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros/nodes/supervoxel_segmentation.php');
RGD::import('ros/jsk_pcl_ros/nodes/supervoxel_segmentation_decomposer.php');
RGD::import('ros/jsk_pcl_ros/nodes/convex_connected_voxels.php');
RGD::import('ros/jsk_pcl_ros/nodes/convex_connected_voxels_decomposer.php');
RGD::import('ros/rqt_reconfigure/nodes/rqt_reconfigure.php');
