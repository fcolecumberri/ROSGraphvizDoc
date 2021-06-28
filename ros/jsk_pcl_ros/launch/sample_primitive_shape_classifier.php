<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_primitive_shape_classifier.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg manager).php');
RGD::import('ros/nodelet/nodes/input_relay.php');
RGD::import('ros/nodelet/nodes/bilateral_filter.php');
RGD::import('ros/nodelet/nodes/organized_multi_plane_segmentation.php');
RGD::import('ros/nodelet/nodes/plane_concatenator.php');
RGD::import('ros/nodelet/nodes/multi_plane_extraction.php');
RGD::import('ros/nodelet/nodes/euclidean_clustering.php');
RGD::import('ros/nodelet/nodes/euclidean_segmentation_decomposer.php');
RGD::import('ros/nodelet/nodes/primitive_shape_classifier.php');
