<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_apply_mask_image.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/jsk_perception/nodes/mask_publisher.php');
RGD::import('ros/nodelet/nodes/apply_mask_image.php');
RGD::import('ros/image_view/nodes/image_view0.php');
RGD::import('ros/image_view/nodes/image_view1.php');
RGD::import('ros/image_view/nodes/image_view2.php');
