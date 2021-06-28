<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_hinted_stick_finder.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rostopic/nodes/polygon_publisher.php');
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/hinted_stick_finder.php');
RGD::import('ros/nodelet/nodes/rect_to_mask_image.php');
RGD::import('ros/nodelet/nodes/extract_indices_stick.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_shelf_bin.php');
