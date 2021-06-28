<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_octomap_contact.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/publish_pointcloud.php');
RGD::import('ros/image_transport/nodes/republish_rgb.php');
RGD::import('ros/image_transport/nodes/republish_depth_registered.php');
RGD::import('ros/jsk_pcl_ros/nodes/octomap_server_contact.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/openni2_launch/launch/openni2.php');
