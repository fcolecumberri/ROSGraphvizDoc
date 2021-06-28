<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_snapit.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros_utils/nodes/static_polygon_array_publisher.php');
RGD::import('ros/jsk_recognition_utils/nodes/polygon_array_to_polygon.php');
RGD::import('ros/jsk_pcl_ros/nodes/sample_snapit_pose_publisher.php');
RGD::import('ros/nodelet/nodes/snapit.php');
RGD::import('ros/rviz/nodes/rviz.php');
