<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_heightmap_converter.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/heightmap_converter.php');
RGD::import('ros/nodelet/nodes/colorize_float_image.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/play_rosbag_pr2_sink.php');
