<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/snapit.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros/nodes/static_polygon_array_publisher.php');
RGD::import('ros/jsk_pcl_ros/nodes/snapit.php');
RGD::import('ros/tf/nodes/static_transform_publisher.php');
RGD::import('ros/jsk_pcl_ros/nodes/snapit_sample_pose_publisher.php');
RGD::import('ros/jsk_interactive_marker/nodes/marker.php');
