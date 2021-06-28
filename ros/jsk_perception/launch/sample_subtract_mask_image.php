<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_subtract_mask_image.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/jsk_perception/nodes/mask_image_generator0.php');
RGD::import('ros/jsk_perception/nodes/mask_image_generator1.php');
RGD::import('ros/jsk_perception/nodes/subtract_mask_image.php');
RGD::import('ros/image_view/nodes/image_view0.php');
RGD::import('ros/image_view/nodes/image_view1.php');
RGD::import('ros/image_view/nodes/image_view2.php');
