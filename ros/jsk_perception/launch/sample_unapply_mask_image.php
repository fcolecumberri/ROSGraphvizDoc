<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_unapply_mask_image.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/unapply_mask_image.php');
RGD::import('ros/jsk_perception/nodes/tile_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
RGD::import('ros/jsk_perception/launch/sample_apply_mask_image.php');
