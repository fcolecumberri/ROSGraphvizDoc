<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_collision_detector.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/collision_detector.php');
RGD::import('ros/jsk_pcl_ros/nodes/sample_collision_detector_client.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_perception/launch/play_rosbag_pr2_self_see.php');
