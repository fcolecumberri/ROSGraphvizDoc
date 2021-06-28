<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/test/test_icp_registration.test
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg MANAGER).php');
RGD::import('ros/pcl_ros/nodes/model_publisher.php');
RGD::import('ros/nodelet/nodes/voxelgrid.php');
RGD::import('ros/nodelet/nodes/empty_filter.php');
RGD::import('ros/nodelet/nodes/icp_registration.php');
RGD::import('ros/nodelet/nodes/empty_cloud_icp_registration.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_shelf_bin.php');
