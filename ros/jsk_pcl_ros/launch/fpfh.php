<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/fpfh.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/image_view2/nodes/attention_viewer.php');
RGD::import('ros/jsk_pcl_ros/nodes/rect_to_mask_image.php');
RGD::import('ros/jsk_pcl_ros/nodes/mask_image_filter.php');
RGD::import('ros/nodelet/nodes/pointcloud_server_org.php');
RGD::import('ros/topic_tools/nodes/pointcloud_server.php');
RGD::import('ros/nodelet/nodes/pointcloud_server.php');
RGD::import('ros/nodelet/nodes/template_normal_estimation.php');
RGD::import('ros/jsk_pcl_ros/nodes/template_normal_concat.php');
RGD::import('ros/nodelet/nodes/template_fpfh.php');
RGD::import('ros/nodelet/nodes/normal_estimation.php');
RGD::import('ros/jsk_pcl_ros/nodes/normal_concat.php');
RGD::import('ros/nodelet/nodes/downsample.php');
RGD::import('ros/nodelet/nodes/downsample.php');
RGD::import('ros/nodelet/nodes/fpfh.php');
RGD::import('ros/jsk_pcl_ros/nodes/feature_registration.php');
