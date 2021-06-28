<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/test/color_histogram.test
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros_utils/nodes/indices.php');
RGD::import('ros/jsk_pcl_ros/nodes/color_histogram.php');
RGD::import('ros/jsk_pcl_ros/nodes/color_histogram_filter.php');
RGD::import('ros/jsk_pcl_ros/nodes/color_histogram_classifier.php');
RGD::import('ros/jsk_pcl_ros/nodes/color_histogram_visualizer.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_shelf_bin.php');
