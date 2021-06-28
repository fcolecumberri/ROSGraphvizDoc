<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/border_estimate.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros/nodes/laser_cloud_from_camera_frame.php');
RGD::import('ros/jsk_pcl_ros/nodes/border_estimator.php');
RGD::import('ros/nodelet/nodes/border_points.php');
RGD::import('ros/nodelet/nodes/veil_points.php');
RGD::import('ros/nodelet/nodes/shadow_points.php');
