<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_transform_pointcloud_in_bounding_box.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/pcl_ros/nodes/pcd_to_pointcloud.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/sample_bounding_box_publisher_from_pointcloud.php');
RGD::import('ros/tf/nodes/static_tf_publisher.php');
RGD::import('ros/nodelet/nodes/transform_pointcloud_in_bounding_box.php');
RGD::import('ros/rviz/nodes/rviz.php');
