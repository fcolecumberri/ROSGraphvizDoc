<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/launch/apply_unapply_mask.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/image_view2/nodes/image_view2.php');
RGD::import('ros/jsk_perception/nodes/apply.php');
RGD::import('ros/jsk_perception/nodes/unapply.php');
RGD::import('ros/image_view/nodes/foreground_mask_view.php');
RGD::import('ros/image_view/nodes/applied_foreground_view.php');
RGD::import('ros/image_view/nodes/unapplied_foreground_view.php');
