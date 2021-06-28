<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_filter_mask_image_with_size.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/erode_mask_image.php');
RGD::import('ros/jsk_perception/nodes/convex_hull_mask_image.php');
RGD::import('ros/jsk_perception/nodes/filter_mask_image_with_size.php');
RGD::import('ros/jsk_perception/nodes/apply_mask_image_before_filtering.php');
RGD::import('ros/jsk_perception/nodes/apply_mask_image_filtered.php');
RGD::import('ros/image_view/nodes/image_view0.php');
RGD::import('ros/image_view/nodes/image_view1.php');
RGD::import('ros/image_view/nodes/image_view2.php');
RGD::import('ros/jsk_perception/launch/sample_flow_velocity_thresholding.php');
