<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_plane_concatenator.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/grid_label.php');
RGD::import('ros/nodelet/nodes/label_to_cluster_point_indices.php');
RGD::import('ros/nodelet/nodes/planar_pointcloud_simulator.php');
RGD::import('ros/nodelet/nodes/pointcloud_xyz_to_xyzrgb.php');
RGD::import('ros/nodelet/nodes/static_polygon_array_publisher.php');
RGD::import('ros/nodelet/nodes/plane_concatenator.php');
RGD::import('ros/rviz/nodes/rviz.php');
