<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_extract_top_polygon_likelihood.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros/nodes/extract_top_polygon_likelihood.php');
RGD::import('ros/topic_tools/nodes/likelihood0_to_float.php');
RGD::import('ros/topic_tools/nodes/likelihood1_to_float.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/sample_plane_time_ensync_for_recognition.php');
