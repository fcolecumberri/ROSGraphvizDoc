<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/pointcloud_localization.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/manager.php');
RGD::import('ros/nodelet/nodes/x_filter.php');
RGD::import('ros/nodelet/nodes/y_filter.php');
RGD::import('ros/nodelet/nodes/z_filter.php');
RGD::import('ros/nodelet/nodes/pointcloud_localization.php');
RGD::import('ros/nodelet/nodes/icp_client.php');
RGD::import('ros/nodelet/nodes/downsample_for_visuzliation.php');
