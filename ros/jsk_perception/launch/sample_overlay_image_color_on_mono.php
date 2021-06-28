<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_overlay_image_color_on_mono.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/jsk_perception/nodes/depth_publisher.php');
RGD::import('ros/jsk_perception/nodes/colorize_float_image.php');
RGD::import('ros/jsk_perception/nodes/overlay_image_color_on_mono.php');
RGD::import('ros/image_view/nodes/image_view0.php');
RGD::import('ros/image_view/nodes/image_view1.php');
RGD::import('ros/image_view/nodes/image_view2.php');
