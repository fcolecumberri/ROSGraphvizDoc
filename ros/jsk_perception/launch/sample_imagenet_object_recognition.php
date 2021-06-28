<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_imagenet_object_recognition.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/jsk_perception/nodes/draw_classification_result.php');
RGD::import('ros/image_view/nodes/image_view0.php');
RGD::import('ros/jsk_perception/launch/imagenet_object_recognition.php');
