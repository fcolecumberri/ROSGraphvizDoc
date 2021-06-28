<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_plane_reasoner.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/static_polygon_array_publisher.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/sample_cluster_indices_publisher_from_polygons.php');
RGD::import('ros/dynamic_reconfigure/nodes/dynparam_setter.php');
RGD::import('ros/nodelet/nodes/plane_reasoner.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_shelf_bin.php');
