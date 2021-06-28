<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/launch/grabcut.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/image_view2/nodes/image_view2.php');
RGD::import('ros/jsk_perception/nodes/grabcut.php');
RGD::import('ros/image_view/nodes/foreground_mask.php');
RGD::import('ros/image_view/nodes/background_mask.php');
RGD::import('ros/image_view/nodes/foreground.php');
RGD::import('ros/image_view/nodes/background.php');
RGD::import('ros/image_view/nodes/foreground_output_mask.php');
RGD::import('ros/image_view/nodes/background_output_mask.php');
