<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_fcn_object_segmentation.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/jsk_perception/nodes/mask_image_generator.php');
RGD::import('ros/jsk_perception/nodes/apply_mask_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
RGD::import('ros/jsk_perception/launch/fcn_object_segmentation.php');
