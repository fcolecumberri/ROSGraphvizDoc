<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_morphological_operator.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/erode_mask_image.php');
RGD::import('ros/nodelet/nodes/dilate_mask_image.php');
RGD::import('ros/nodelet/nodes/opening.php');
RGD::import('ros/nodelet/nodes/closing.php');
RGD::import('ros/nodelet/nodes/morphological_gradient.php');
RGD::import('ros/nodelet/nodes/top_hat.php');
RGD::import('ros/nodelet/nodes/black_hat.php');
RGD::import('ros/jsk_perception/nodes/tile_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
RGD::import('ros/jsk_perception/launch/sample_image_publisher.php');
