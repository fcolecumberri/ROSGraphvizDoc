<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_edge_depth_refinement.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/edge_depth_refinement_manager.php');
RGD::import('ros/nodelet/nodes/edge_detector.php');
RGD::import('ros/nodelet/nodes/edge_depth_refinement.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_shelf_bin.php');
