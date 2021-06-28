<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/launch/super_pixels.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/image_view/nodes/original_view.php');
RGD::import('ros/jsk_perception/nodes/slic_super_pixels.php');
RGD::import('ros/jsk_perception/nodes/colorize_labels.php');
RGD::import('ros/image_view/nodes/label_view.php');
RGD::import('ros/image_view/nodes/debug_view.php');
