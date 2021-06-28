<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_cloud_on_plane.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/pcl_ros/nodes/pcd_to_pointcloud.php');
RGD::import('ros/jsk_recognition_utils/nodes/polygon_array_publisher.php');
RGD::import('ros/nodelet/nodes/cloud_on_plane.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/cloud_on_plane_info.php');
RGD::import('ros/rviz/nodes/rviz.php');
