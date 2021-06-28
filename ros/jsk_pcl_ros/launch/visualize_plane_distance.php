<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/visualize_plane_distance.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/manager.php');
RGD::import('ros/nodelet/nodes/input_relay.php');
RGD::import('ros/nodelet/nodes/footprint_polygon_publisher.php');
RGD::import('ros/nodelet/nodes/transform_points.php');
RGD::import('ros/nodelet/nodes/colorize_points.php');
