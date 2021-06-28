<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_calculate_polygon_from_imu.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/tf/nodes/static_tf_publisher.php');
RGD::import('ros/rostopic/nodes/imu_publisher.php');
RGD::import('ros/jsk_pcl_ros/nodes/calculate_polygon_from_imu.php');
RGD::import('ros/rviz/nodes/rviz.php');
