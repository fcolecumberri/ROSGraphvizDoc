<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_normal_concatenater.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/normal_estimation.php');
RGD::import('ros/nodelet/nodes/normal_concatenater.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_shelf_bin.php');
