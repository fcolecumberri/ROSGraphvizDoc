<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_border_estimator.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/border_estimator.php');
RGD::import('ros/nodelet/nodes/extract_indices_border.php');
RGD::import('ros/nodelet/nodes/extract_indices_veil.php');
RGD::import('ros/nodelet/nodes/extract_indices_shadow.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/play_rosbag_pr2_sink.php');
