<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_point_indices_to_cluster_point_indices.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros_utils/nodes/pointcloud_to_point_indices.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/point_indices_to_cluster_point_indices.php');
RGD::import('ros/jsk_pcl_ros/nodes/cluster_point_indices_decomposer.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_shelf_bin.php');
