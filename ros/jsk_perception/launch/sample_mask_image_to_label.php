<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_mask_image_to_label.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/mask_image_to_label.php');
RGD::import('ros/image_view/nodes/image_view0.php');
RGD::import('ros/image_view/nodes/image_view1.php');
RGD::import('ros/jsk_perception/launch/sample_image_publisher.php');
