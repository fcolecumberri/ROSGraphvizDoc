<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_add_point_indices.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg MANAGER).php');
RGD::import('ros/nodelet/nodes/passthrough_filter_right.php');
RGD::import('ros/nodelet/nodes/passthrough_filter_left.php');
RGD::import('ros/nodelet/nodes/pointcloud_to_point_indices_right.php');
RGD::import('ros/nodelet/nodes/pointcloud_to_point_indices_left.php');
RGD::import('ros/nodelet/nodes/add_point_indices.php');
RGD::import('ros/nodelet/nodes/point_indices_to_mask_image.php');
RGD::import('ros/nodelet/nodes/pointcloud_to_mask_image_right.php');
RGD::import('ros/nodelet/nodes/pointcloud_to_mask_image_left.php');
RGD::import('ros/image_view/nodes/image_view0.php');
RGD::import('ros/image_view/nodes/image_view1.php');
RGD::import('ros/image_view/nodes/image_view2.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_shelf_bin.php');
