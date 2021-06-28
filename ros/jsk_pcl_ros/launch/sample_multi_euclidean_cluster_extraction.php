<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_multi_euclidean_cluster_extraction.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/multi_euclidean_clustering.php');
RGD::import('ros/nodelet/nodes/multi_euclidean_cluster_point_indices_decomposer.php');
RGD::import('ros/nodelet/nodes/cluster_point_indices_decomposer.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_hsr_multiobjects_in_shelf.php');
