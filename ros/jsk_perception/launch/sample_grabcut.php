<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_grabcut.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/mask_image_generator_foreground.php');
RGD::import('ros/nodelet/nodes/mask_image_generator_background.php');
RGD::import('ros/nodelet/nodes/grabcut.php');
RGD::import('ros/nodelet/nodes/apply_mask_image_input_foreground.php');
RGD::import('ros/nodelet/nodes/apply_mask_image_input_background.php');
RGD::import('ros/jsk_perception/nodes/tile_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
