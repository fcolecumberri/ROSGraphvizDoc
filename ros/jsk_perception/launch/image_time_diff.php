<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/image_time_diff.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/uvc_camera/nodes/uvc_camera_node.php');
RGD::import('ros/jsk_perception/nodes/hsv_decomposer.php');
RGD::import('ros/jsk_perception/nodes/image_time_diff.php');
RGD::import('ros/image_view/nodes/hue_view.php');
RGD::import('ros/image_view/nodes/satuation_view.php');
RGD::import('ros/image_view/nodes/diff_view.php');
