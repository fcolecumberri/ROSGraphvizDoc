<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_linemod_trainer.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/hsi_color_filter.php');
RGD::import('ros/nodelet/nodes/euclidean_clustering.php');
RGD::import('ros/nodelet/nodes/cluster_point_indices_decomposer.php');
RGD::import('ros/nodelet/nodes/cluster_point_indices_to_point_indices.php');
RGD::import('ros/nodelet/nodes/extract_indices.php');
RGD::import('ros/nodelet/nodes/linemod_trainer.php');
RGD::import('ros/jsk_pcl_ros/nodes/sample_empty_service_caller.php');
RGD::import('ros/jsk_rviz_plugins/nodes/rosconsole_overlay_text.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/play_rosbag_pr2_sink.php');
