<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_planar_pointcloud_simulator.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros_utils/nodes/sample_camera_info_and_pointcloud_publisher.php');
RGD::import('ros/nodelet/nodes/planar_pointcloud_simulator.php');
RGD::import('ros/rviz/nodes/rviz.php');
