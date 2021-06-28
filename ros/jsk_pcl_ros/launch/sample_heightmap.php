<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_heightmap.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros/nodes/heightmap_converter.php');
RGD::import('ros/jsk_perception/nodes/colorize_raw_heightmap.php');
RGD::import('ros/image_view/nodes/image_view.php');
RGD::import('ros/jsk_pcl_ros/nodes/complete_hole.php');
RGD::import('ros/jsk_perception/nodes/colorize_filtered_heightmap.php');
RGD::import('ros/jsk_pcl_ros/nodes/completed_pointcloud.php');
RGD::import('ros/image_view/nodes/filtered_image_view.php');
RGD::import('ros/jsk_footstep_planner/nodes/pointcloud_model_generator.php');
RGD::import('ros/jsk_pcl_ros/nodes/acc.php');
RGD::import('ros/jsk_pcl_ros/nodes/prev_cloud.php');
RGD::import('ros/jsk_perception/nodes/acc_color.php');
RGD::import('ros/image_view/nodes/acc_image_view.php');
