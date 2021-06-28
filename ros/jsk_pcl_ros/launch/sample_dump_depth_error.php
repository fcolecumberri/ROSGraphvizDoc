<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_dump_depth_error.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros/nodes/dump_depth_error.php');
RGD::import('ros/topic_tools/nodes/extract_true_depth.php');
RGD::import('ros/topic_tools/nodes/extract_observed_depth.php');
RGD::import('ros/jsk_rqt_plugins/nodes/rqt_2d_plot.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/sample_depth_image_error.php');
