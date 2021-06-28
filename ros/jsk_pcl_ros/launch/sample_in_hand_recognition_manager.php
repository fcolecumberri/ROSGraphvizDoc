<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_in_hand_recognition_manager.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rostopic/nodes/sample_pose_publisher.php');
RGD::import('ros/jsk_pcl_ros/nodes/in_hand_recognition_manager.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/sample_icp_registration.php');
