<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/hsi_color_filter.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg manager).php');
RGD::import('ros/nodelet/nodes/hsi_filter$(arg FILTER_NAME_SUFFIX).php');
RGD::import('ros/nodelet/nodes/euclidean_clustering$(arg FILTER_NAME_SUFFIX).php');
RGD::import('ros/nodelet/nodes/cluster_decomposer$(arg FILTER_NAME_SUFFIX).php');
