<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_keypoints_publisher.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/pointcloud_xyzrgb_to_xyz.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/play_rosbag_room73b2_table.php');
RGD::import('ros/jsk_pcl_ros/launch/keypoints_publisher.php');
