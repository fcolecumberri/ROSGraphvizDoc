<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_vgg16_object_recognition.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/jsk_perception/nodes/mask_publisher.php');
RGD::import('ros/jsk_perception/nodes/apply_mask_image.php');
RGD::import('ros/jsk_perception/nodes/vgg16_object_recognition.php');
RGD::import('ros/jsk_perception/nodes/vgg16_object_recognition_masked.php');
RGD::import('ros/jsk_perception/nodes/draw_classification_result.php');
RGD::import('ros/jsk_perception/nodes/draw_classification_result_masked.php');
RGD::import('ros/image_view/nodes/image_view0.php');
RGD::import('ros/image_view/nodes/image_view1.php');
RGD::import('ros/image_view/nodes/image_view2.php');
RGD::import('ros/image_view/nodes/image_view3.php');
