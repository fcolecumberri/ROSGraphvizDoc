<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_apply_context_to_label_probability.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/apply_context_to_label_probability.php');
RGD::import('ros/jsk_perception/nodes/label_image_decomposer_with_context.php');
RGD::import('ros/image_view/nodes/image_view0.php');
RGD::import('ros/image_view/nodes/image_view1.php');
RGD::import('ros/jsk_perception/launch/sample_fcn_object_segmentation.php');
