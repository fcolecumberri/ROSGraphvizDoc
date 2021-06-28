<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_mask_image_to_depth_considered_mask_image.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros_utils/nodes/mask_image.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/depth_considered.php');
RGD::import('ros/image_view/nodes/image_view.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_shelf_bin.php');
