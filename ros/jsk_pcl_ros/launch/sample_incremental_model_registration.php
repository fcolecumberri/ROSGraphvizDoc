<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_incremental_model_registration.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/image_transport/nodes/republish_rgb.php');
RGD::import('ros/image_transport/nodes/republish_depth.php');
RGD::import('ros/nodelet/nodes/point_cloud_xyzrgb.php');
RGD::import('ros/nodelet/nodes/voxel_grid.php');
RGD::import('ros/nodelet/nodes/attention_clipper.php');
RGD::import('ros/nodelet/nodes/icp_registration.php');
RGD::import('ros/nodelet/nodes/incremental_model_registration.php');
RGD::import('ros/jsk_pcl_ros/nodes/sample_empty_service_caller.php');
RGD::import('ros/rviz/nodes/rviz.php');
