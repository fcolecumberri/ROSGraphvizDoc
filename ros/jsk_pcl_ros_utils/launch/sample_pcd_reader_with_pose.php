<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_pcd_reader_with_pose.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rostopic/nodes/pose_publisher.php');
RGD::import('ros/nodelet/nodes/pcd_reader_with_pose.php');
RGD::import('ros/rviz/nodes/rviz.php');
