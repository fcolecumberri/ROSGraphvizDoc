<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/organized_edge_detector.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/edge_manager.php');
RGD::import('ros/nodelet/nodes/filter.php');
RGD::import('ros/nodelet/nodes/edge_detector.php');
RGD::import('ros/nodelet/nodes/edge_refinement.php');
RGD::import('ros/nodelet/nodes/parallel_edge.php');
RGD::import('ros/nodelet/nodes/cube_finder.php');
RGD::import('ros/nodelet/nodes/straight_edge_decomposer.php');
RGD::import('ros/nodelet/nodes/refined_straight_edge_decomposer.php');
RGD::import('ros/nodelet/nodes/parallel_edge_decomposer.php');
RGD::import('ros/nodelet/nodes/cube_candidate.php');
