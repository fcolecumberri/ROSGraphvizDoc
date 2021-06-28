<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/rgb_color_filter.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg manager).php');
RGD::import('ros/nodelet/nodes/zfilter.php');
RGD::import('ros/nodelet/nodes/rgb_filter.php');
RGD::import('ros/nodelet/nodes/euclidean_clustering.php');
RGD::import('ros/nodelet/nodes/cluster_decomposer.php');
