<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_handle_estimator.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/cluster_indices_decomposer.php');
RGD::import('ros/nodelet/nodes/bbox_array_to_bbox.php');
RGD::import('ros/jsk_pcl_ros/nodes/sample_int_publisher_from_pose_array.php');
RGD::import('ros/nodelet/nodes/handle_estimator.php');
RGD::import('ros/rviz/nodes/rviz.php');
