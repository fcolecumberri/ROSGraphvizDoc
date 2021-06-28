<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_detect_graspable_poses_pcabase.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/jsk_pcl_ros/nodes/detect_graspable_poses_pcabase.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/openni2_launch/launch/openni2.php');
