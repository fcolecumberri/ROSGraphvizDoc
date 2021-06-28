<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/polygon_array_transformer.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg MANAGER).php');
RGD::import('ros/nodelet/nodes/transform_cloud.php');
RGD::import('ros/nodelet/nodes/passthrough_z.php');
RGD::import('ros/nodelet/nodes/passthrough_y.php');
RGD::import('ros/nodelet/nodes/passthrough_x.php');
RGD::import('ros/nodelet/nodes/normal_estimation.php');
RGD::import('ros/nodelet/nodes/region_segment.php');
RGD::import('ros/nodelet/nodes/polygon_array_transformer.php');
RGD::import('ros/nodelet/nodes/snapshot.php');
