<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_color_histogram.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg manager).php');
RGD::import('ros/nodelet/nodes/bilateral_filter.php');
RGD::import('ros/nodelet/nodes/organized_multi_plane_segmentation.php');
RGD::import('ros/nodelet/nodes/plane_concatenator.php');
RGD::import('ros/nodelet/nodes/polygon_array_area_likelihood.php');
RGD::import('ros/nodelet/nodes/polygon_array_likelihood_filter.php');
RGD::import('ros/nodelet/nodes/multi_plane_extraction.php');
RGD::import('ros/nodelet/nodes/euclidean_clustering.php');
RGD::import('ros/nodelet/nodes/euclidean_segmentation_decomposer.php');
RGD::import('ros/nodelet/nodes/color_histogram.php');
RGD::import('ros/jsk_pcl_ros/nodes/color_histogram_visualizer.php');
RGD::import('ros/nodelet/nodes/color_histogram_classifier.php');
RGD::import('ros/jsk_rviz_plugins/nodes/color_class_visualizer.php');
RGD::import('ros/rviz/nodes/rviz.php');
