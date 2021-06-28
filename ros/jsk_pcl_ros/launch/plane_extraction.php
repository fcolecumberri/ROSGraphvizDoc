<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/plane_extraction.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg manager).php');
RGD::import('ros/nodelet/nodes/transform_org_cloud.php');
RGD::import('ros/jsk_recognition_utils/nodes/bounding_box_array_publisher.php');
RGD::import('ros/nodelet/nodes/attention_clipper.php');
RGD::import('ros/nodelet/nodes/extract_indices.php');
RGD::import('ros/nodelet/nodes/plane_segmentation.php');
RGD::import('ros/nodelet/nodes/plane_normal_filter.php');
RGD::import('ros/nodelet/nodes/plane_decomposer.php');
