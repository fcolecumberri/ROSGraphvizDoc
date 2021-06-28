<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_polygon_flipper.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/tf/nodes/static_tf_publisher.php');
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/static_polygon_array_publisher.php');
RGD::import('ros/nodelet/nodes/polygon_flipper.php');
RGD::import('ros/rviz/nodes/rviz.php');
