<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_heightmap_to_pointcloud.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/heightmap_to_pointcloud.php');
RGD::import('ros/nodelet/nodes/colorize_float_image.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/sample_heightmap_morphological_filtering.php');
