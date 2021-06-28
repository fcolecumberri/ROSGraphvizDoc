<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/tower_detect/tower_pcl.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/passthrough_z.php');
RGD::import('ros/nodelet/nodes/passthrough_y.php');
RGD::import('ros/nodelet/nodes/passthrough_x.php');
RGD::import('ros/nodelet/nodes/clustering.php');
RGD::import('ros/nodelet/nodes/cluster_decomposer.php');
RGD::import('ros/nodelet/nodes/centroid_publisher00.php');
RGD::import('ros/nodelet/nodes/centroid_publisher01.php');
RGD::import('ros/nodelet/nodes/centroid_publisher02.php');
