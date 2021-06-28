<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_pointcloud_relative_from_pose_stamped.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rostopic/nodes/pose_publisher.php');
RGD::import('ros/pcl_ros/nodes/pcd_to_pointcloud.php');
RGD::import('ros/nodelet/nodes/pointcloud_relative_from_pose_stamped.php');
RGD::import('ros/rviz/nodes/rviz.php');
