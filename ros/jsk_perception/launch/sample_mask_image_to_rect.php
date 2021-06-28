<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_mask_image_to_rect.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/jsk_perception/nodes/mask_image_generator.php');
RGD::import('ros/jsk_perception/nodes/mask_image_to_rect.php');
RGD::import('ros/jsk_perception/nodes/draw_rects.php');
RGD::import('ros/image_view/nodes/image_view0.php');
RGD::import('ros/image_view/nodes/image_view1.php');
