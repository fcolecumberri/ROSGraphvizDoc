<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/pointcloud_screenpoint.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/screenpoint_manager.php');
RGD::import('ros/nodelet/nodes/depth_image_creator_nodelet.php');
RGD::import('ros/nodelet/nodes/depth_image_proc_nodelet.php');
RGD::import('ros/nodelet/nodes/pointcloud_screenpoint_nodelet.php');
RGD::import('ros/image_view2/nodes/screenpoint_view.php');
RGD::import('ros/openni_launch/launch/openni.php');
