<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_add_color_from_image_to_organized.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/nodelet/nodes/$(arg MANAGER).php');
RGD::import('ros/nodelet/nodes/register.php');
RGD::import('ros/nodelet/nodes/point_cloud_xyzrgb.php');
RGD::import('ros/nodelet/nodes/add_color_from_image.php');
RGD::import('ros/rviz/nodes/rviz.php');
