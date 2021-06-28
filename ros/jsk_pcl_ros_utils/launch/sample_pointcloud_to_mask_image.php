<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_pointcloud_to_mask_image.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros_utils/nodes/pointcloud_to_mask_image.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/depth_to_mask_image.php');
RGD::import('ros/rqt_gui/nodes/rqt_gui.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_shelf_bin.php');
