<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_normal_flip_to_frame.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/tf/nodes/static_tf_publisher.php');
RGD::import('ros/nodelet/nodes/normal_flip_to_frame.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/sample_normal_concatenater.php');
