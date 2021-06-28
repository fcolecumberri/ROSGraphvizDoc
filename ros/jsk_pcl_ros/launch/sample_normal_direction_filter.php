<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_normal_direction_filter.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/normal_direction_filter.php');
RGD::import('ros/nodelet/nodes/extract_indices_normal_filtered.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/sample_normal_estimation_omp.php');
