<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_fcn_depth_prediction.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher_rgb.php');
RGD::import('ros/jsk_perception/nodes/image_publisher_depth.php');
RGD::import('ros/jsk_perception/nodes/fcn_depth_prediction.php');
RGD::import('ros/jsk_perception/nodes/label_image_decomposer.php');
RGD::import('ros/image_view/nodes/image_view_rgb.php');
RGD::import('ros/image_view/nodes/image_view_depth_input.php');
RGD::import('ros/image_view/nodes/image_view_label.php');
RGD::import('ros/image_view/nodes/image_view_depth_output.php');
