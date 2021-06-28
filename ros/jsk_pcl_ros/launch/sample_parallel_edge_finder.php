<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_parallel_edge_finder.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/parallel_edge_finder.php');
RGD::import('ros/nodelet/nodes/cluster_point_indices_decomposer_line_segments.php');
RGD::import('ros/nodelet/nodes/cluster_point_indices_decomposer_parallel_edge.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/sample_line_segment_detector.php');
