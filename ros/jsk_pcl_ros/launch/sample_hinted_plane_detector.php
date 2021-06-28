<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_hinted_plane_detector.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/organized_pass_through.php');
RGD::import('ros/nodelet/nodes/normal_estimation_omp.php');
RGD::import('ros/nodelet/nodes/mask_image_generator.php');
RGD::import('ros/nodelet/nodes/mask_image_to_point_indices.php');
RGD::import('ros/nodelet/nodes/extract_indices_hint.php');
RGD::import('ros/nodelet/nodes/hinted_plane_detector.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/play_rosbag_pr2_sink.php');
