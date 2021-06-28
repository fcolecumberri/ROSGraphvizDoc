<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_label_image_classifier.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/label_image_classifier.php');
RGD::import('ros/jsk_perception/nodes/draw_classification_result.php');
RGD::import('ros/image_view/nodes/image_view_1.php');
RGD::import('ros/jsk_perception/launch/sample_fcn_object_segmentation.php');
