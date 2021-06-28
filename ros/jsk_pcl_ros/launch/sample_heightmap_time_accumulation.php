<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_heightmap_time_accumulation.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/laser_assembler/nodes/laser_scan_assembler.php');
RGD::import('ros/jsk_pcl_ros/nodes/sample_laser_scan_assembler_client.php');
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/heightmap_converter.php');
RGD::import('ros/nodelet/nodes/heightmap_time_accumulation.php');
RGD::import('ros/nodelet/nodes/heightmap_to_pointcloud.php');
RGD::import('ros/nodelet/nodes/colorize_float_image_current_heightmap.php');
RGD::import('ros/nodelet/nodes/colorize_float_image_accumulated_heightmap.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/play_rosbag_pr2_sink.php');
