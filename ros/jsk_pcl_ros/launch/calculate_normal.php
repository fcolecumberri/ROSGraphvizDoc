<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/calculate_normal.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg manager).php');
RGD::import('ros/nodelet/nodes/voxel_grid.php');
RGD::import('ros/nodelet/nodes/ground_segmentation.php');
RGD::import('ros/nodelet/nodes/project_inliers.php');
RGD::import('ros/nodelet/nodes/convex_hull.php');
RGD::import('ros/nodelet/nodes/extract_nonground_indices.php');
RGD::import('ros/nodelet/nodes/normal_estimate.php');
RGD::import('ros/nodelet/nodes/polygon_array_wrapper.php');
RGD::import('ros/nodelet/nodes/normal_concat.php');
RGD::import('ros/nodelet/nodes/clustering.php');
RGD::import('ros/nodelet/nodes/cluster_decomposer.php');
