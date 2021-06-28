<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_cluster_point_indices_label_filter.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros_utils/nodes/cluster_point_indices_label_filter.php');
RGD::import('ros/jsk_perception/nodes/image_cluster_indices_decomposer.php');
RGD::import('ros/jsk_perception/nodes/tile_image.php');
RGD::import('ros/image_view/nodes/image_view_clust.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_hsr_multiobjects_in_shelf.php');
