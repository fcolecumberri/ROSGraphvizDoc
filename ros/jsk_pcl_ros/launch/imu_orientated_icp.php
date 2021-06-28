<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/imu_orientated_icp.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg MANAGER).php');
RGD::import('ros/nodelet/nodes/add_cluster.php');
RGD::import('ros/nodelet/nodes/icp_registration.php');
RGD::import('ros/nodelet/nodes/pointcloud_server.php');
RGD::import('ros/nodelet/nodes/polygon_transformer.php');
RGD::import('ros/nodelet/nodes/cluster_decomposer_one.php');
RGD::import('ros/nodelet/nodes/box_array_to_box.php');
RGD::import('ros/jsk_pcl_ros/nodes/calc_polygon.php');
RGD::import('ros/jsk_pcl_ros/nodes/time_ensync.php');
