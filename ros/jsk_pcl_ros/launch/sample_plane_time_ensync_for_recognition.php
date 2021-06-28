<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_plane_time_ensync_for_recognition.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_recognition_utils/nodes/polygon_array_publisher.php');
RGD::import('ros/rostopic/nodes/model_coefficients_array_publisher.php');
RGD::import('ros/pcl_ros/nodes/pcd_to_pointcloud.php');
RGD::import('ros/jsk_pcl_ros/nodes/plane_time_ensync_for_recognition.php');
RGD::import('ros/rviz/nodes/rviz.php');
