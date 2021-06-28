<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/attention_clipper_sample.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros/nodes/attention_clipper.php');
RGD::import('ros/jsk_pcl_ros/nodes/roi_attention_clipper.php');
RGD::import('ros/image_view/nodes/roi_image_view.php');
RGD::import('ros/image_view/nodes/mask_image_view.php');
RGD::import('ros/image_view/nodes/original_image_view.php');
RGD::import('ros/jsk_pcl_ros/nodes/attention_pose_set.php');
