<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_polygon_magnifier.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros_utils/nodes/polygon_magnifier_positive.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/polygon_magnifier_negative.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/polygon_magnifier_scale.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_recognition_utils/launch/sample_polygon_array_publisher.php');
