<?php
// file: /tmp/ros_RGD/jsk_recognition/checkerboard_detector/capture.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/checkerboard_detector/nodes/checkerboard_detector.php');
RGD::import('ros/jsk_topic_tools/nodes/offset_center.php');
RGD::import('ros/checkerboard_detector/nodes/checkerboard_detector.php');
RGD::import('ros/jsk_topic_tools/nodes/offset_center.php');
RGD::import('ros/jsk_pcl_ros/nodes/attention_clipper.php');
RGD::import('ros/nodelet/nodes/extract_indices_manager.php');
RGD::import('ros/nodelet/nodes/extract_indices.php');
RGD::import('ros/jsk_pcl_ros/nodes/mask_image.php');
RGD::import('ros/image_view/nodes/mask_image_view.php');
RGD::import('ros/image_view/nodes/original_image_view.php');
