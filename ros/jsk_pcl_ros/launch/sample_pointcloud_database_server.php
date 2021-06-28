<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_pointcloud_database_server.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/tf/nodes/static_tf_publisher_map_to_drill.php');
RGD::import('ros/tf/nodes/static_tf_publisher_map_to_bunny.php');
RGD::import('ros/nodelet/nodes/pointcloud_database_server_array.php');
RGD::import('ros/nodelet/nodes/pointcloud_database_server_single.php');
RGD::import('ros/rviz/nodes/rviz.php');
