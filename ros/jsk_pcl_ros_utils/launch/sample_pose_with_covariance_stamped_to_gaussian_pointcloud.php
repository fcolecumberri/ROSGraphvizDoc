<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_pose_with_covariance_stamped_to_gaussian_pointcloud.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rostopic/nodes/pose_with_covariance_stamped_publisher.php');
RGD::import('ros/nodelet/nodes/pose_with_covariance_stamped_to_gaussian_pointcloud.php');
RGD::import('ros/rviz/nodes/rviz.php');
