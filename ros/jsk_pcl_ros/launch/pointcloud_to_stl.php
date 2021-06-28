<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/pointcloud_to_stl.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/nodes/pointcloud_to_stl.php');
RGD::import('ros/hrpsys_gazebo_tutorials/nodes/spawn_model.php');
RGD::import('ros/gazebo_ros/nodes/$(anon gazebo).php');
RGD::import('ros/openni_launch/launch/openni.php');
RGD::import('ros/jsk_pcl_ros/launch/organized_multi_plane_segmentation.php');
