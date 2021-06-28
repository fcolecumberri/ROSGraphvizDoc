<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_flow_velocity_thresholding.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/opencv_apps/nodes/fback_flow.php');
RGD::import('ros/jsk_perception/nodes/flow_velocity_thresholding.php');
RGD::import('ros/jsk_perception/nodes/apply_mask_image.php');
RGD::import('ros/image_view/nodes/image_view0.php');
RGD::import('ros/image_view/nodes/image_view1.php');
RGD::import('ros/image_view/nodes/image_view2.php');
