<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_colorize_distance_from_plane.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/planar_pointcloud_simulator.php');
RGD::import('ros/nodelet/nodes/pointcloud_xyz_to_xyzrgb.php');
RGD::import('ros/nodelet/nodes/static_polygon_array_publisher.php');
RGD::import('ros/nodelet/nodes/colorize_distance_from_plane.php');
RGD::import('ros/rviz/nodes/rviz.php');
