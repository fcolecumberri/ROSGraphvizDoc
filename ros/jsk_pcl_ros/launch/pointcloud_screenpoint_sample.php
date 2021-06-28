<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/pointcloud_screenpoint_sample.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros/nodes/display_point.php');
RGD::import('ros/rviz/nodes/$(anon rviz).php');
RGD::import('ros/tf/nodes/optical_frame_tf_publisher.php');
RGD::import('ros/jsk_pcl_ros/launch/pointcloud_screenpoint.php');
