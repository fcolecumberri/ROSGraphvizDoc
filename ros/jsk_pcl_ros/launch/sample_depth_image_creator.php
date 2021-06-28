<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_depth_image_creator.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/depth_image_creator.php');
RGD::import('ros/nodelet/nodes/pointcloud_xyzrgb_to_xyz.php');
RGD::import('ros/nodelet/nodes/depth_image_creator.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/play_rosbag_stereo.php');
