<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_door_handle_detector.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_topic_tools/nodes/manager.php');
RGD::import('ros/jsk_pcl_ros/nodes/extract_top_polygon.php');
