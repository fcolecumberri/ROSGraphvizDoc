<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_tf_transform_cloud.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/pcl_ros/nodes/pcd_to_pointcloud.php');
RGD::import('ros/tf/nodes/static_tf_publisher.php');
RGD::import('ros/nodelet/nodes/tf_transform_cloud.php');
RGD::import('ros/rviz/nodes/rviz.php');
