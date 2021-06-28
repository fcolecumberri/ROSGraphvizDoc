<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_cluster_point_indices_decomposer.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/nodelet/nodes/cluster_point_indices_decomposer.php');
RGD::import('ros/nodelet/nodes/cluster_point_indices_decomposer_align_boxes_with_plane.php');
RGD::import('ros/nodelet/nodes/cluster_point_indices_decomposer_align_boxes_with_frame.php');
RGD::import('ros/rviz/nodes/rviz.php');
