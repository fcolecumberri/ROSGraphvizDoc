<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_multi_plane_sac_segmentation.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/multi_plane_sac_segmentation.php');
RGD::import('ros/dynamic_reconfigure/nodes/dynparam_loader.php');
RGD::import('ros/nodelet/nodes/cluster_indices_decomposer.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/play_rosbag_pr2_sink.php');
