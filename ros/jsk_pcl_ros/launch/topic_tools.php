<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/topic_tools.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/pointcloud_throttle.php');
RGD::import('ros/nodelet/nodes/image_throttle.php');
RGD::import('ros/nodelet/nodes/image_mux.php');
RGD::import('ros/nodelet/nodes/image_demux.php');
RGD::import('ros/openni_launch/launch/openni.php');
