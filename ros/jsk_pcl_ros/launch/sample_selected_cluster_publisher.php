<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_selected_cluster_publisher.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/euclidean_clustering.php');
RGD::import('ros/nodelet/nodes/cluster_indices_decomposer.php');
RGD::import('ros/jsk_pcl_ros/nodes/index_publisher.php');
RGD::import('ros/nodelet/nodes/selected_cluster_publisher.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_shelf_bin.php');
