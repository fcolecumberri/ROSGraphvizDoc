<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_mask_image_filter.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros_utils/nodes/pointcloud_to_mask_image.php');
RGD::import('ros/jsk_pcl_ros/nodes/mask_image_filter.php');
RGD::import('ros/jsk_pcl_ros/nodes/extract_indices.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_shelf_bin.php');
