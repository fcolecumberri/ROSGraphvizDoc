<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_cluster_point_indices_to_point_indices.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros_utils/nodes/pointcloud_to_point_indices.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/point_indices_to_cluster_indices.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/cluster_indices_to_point_indices.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/point_indices_to_mask_image.php');
RGD::import('ros/image_view/nodes/image_view0.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_shelf_bin.php');
