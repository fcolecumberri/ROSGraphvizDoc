<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_pointcloud_to_cluster_point_indices.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/pointcloud_to_cluster_point_indices.php');
RGD::import('ros/nodelet/nodes/cluster_point_indices_to_point_indices.php');
RGD::import('ros/nodelet/nodes/point_indices_to_mask_image.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_shelf_bin.php');
