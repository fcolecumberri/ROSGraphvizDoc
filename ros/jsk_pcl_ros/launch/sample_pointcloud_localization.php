<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_pointcloud_localization.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/pointcloud_localization.php');
RGD::import('ros/jsk_pcl_ros/nodes/sample_pointcloud_localization_client.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/sample_icp_registration.php');
