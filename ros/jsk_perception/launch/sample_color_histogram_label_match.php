<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_color_histogram_label_match.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/mask_image_generator.php');
RGD::import('ros/nodelet/nodes/slic_super_pixels.php');
RGD::import('ros/nodelet/nodes/hsv_decomposer.php');
RGD::import('ros/nodelet/nodes/single_channel_histogram.php');
RGD::import('ros/nodelet/nodes/color_histogram_label_match.php');
RGD::import('ros/jsk_perception/nodes/label_image_decomposer.php');
RGD::import('ros/image_view/nodes/image_view_coefficient_image.php');
RGD::import('ros/jsk_perception/nodes/tile_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
RGD::import('ros/jsk_perception/launch/sample_image_publisher.php');
