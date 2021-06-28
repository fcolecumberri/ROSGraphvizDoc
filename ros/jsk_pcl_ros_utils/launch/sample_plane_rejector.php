<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_plane_rejector.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/static_polygon_array_publisher.php');
RGD::import('ros/dynamic_reconfigure/nodes/dynparam_setter.php');
RGD::import('ros/nodelet/nodes/plane_rejector.php');
RGD::import('ros/rviz/nodes/rviz.php');
