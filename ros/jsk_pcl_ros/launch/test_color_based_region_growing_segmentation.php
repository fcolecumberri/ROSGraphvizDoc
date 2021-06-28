<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/test/test_color_based_region_growing_segmentation.test
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/resize_points_publisher.php');
RGD::import('ros/nodelet/nodes/color_based_region_growing_segmentation_nodelet.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_shelf_bin.php');
