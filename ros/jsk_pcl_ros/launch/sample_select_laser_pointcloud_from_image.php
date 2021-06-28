<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/sample_select_laser_pointcloud_from_image.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/image_view2/nodes/image_view2.php');
RGD::import('ros/jsk_perception/nodes/rect_to_mask_image.php');
RGD::import('ros/jsk_pcl_ros/nodes/mask_image_filter.php');
RGD::import('ros/jsk_pcl_ros/nodes/supervoxel_segmentation.php');
RGD::import('ros/jsk_pcl_ros/nodes/supervoxel_segmentation_decomposer.php');
RGD::import('ros/jsk_pcl_ros/nodes/mask_image_cluster_filter.php');
RGD::import('ros/nodelet/nodes/filtered_cloud.php');
RGD::import('ros/nodelet/nodes/filtered_cloud_2.php');
RGD::import('ros/image_view/nodes/debug_view.php');
