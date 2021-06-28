<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_pointcloud_screenpoint.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rostopic/nodes/sample_point_publisher.php');
RGD::import('ros/nodelet/nodes/pointcloud_screenpoint.php');
RGD::import('ros/jsk_pcl_ros/nodes/pointcloud_screenpoint_client.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_shelf_bin.php');
