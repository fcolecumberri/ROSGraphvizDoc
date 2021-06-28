<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_joint_state_static_filter.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/image_transport/nodes/republish_rgb.php');
RGD::import('ros/image_transport/nodes/republish_depth.php');
RGD::import('ros/nodelet/nodes/point_cloud_xyzrgb.php');
RGD::import('ros/nodelet/nodes/joint_state_static_filter.php');
RGD::import('ros/rviz/nodes/rviz.php');
