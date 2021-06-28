<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/region_growing_segmentation.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/manager.php');
RGD::import('ros/nodelet/nodes/normal_estimate.php');
RGD::import('ros/nodelet/nodes/normal_concat.php');
RGD::import('ros/nodelet/nodes/remove_nan.php');
RGD::import('ros/nodelet/nodes/region_segment.php');
RGD::import('ros/nodelet/nodes/cluster_decomposer.php');
