<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_plane_supported_cuboid_estimator.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros/nodes/sample_simulate_tabletop_cloud.php');
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/plane_supported_cuboid_estimator.php');
RGD::import('ros/nodelet/nodes/interactive_cuboid_likelihood.php');
RGD::import('ros/jsk_interactive_marker/nodes/sensor_frame.php');
RGD::import('ros/rviz/nodes/rviz.php');
