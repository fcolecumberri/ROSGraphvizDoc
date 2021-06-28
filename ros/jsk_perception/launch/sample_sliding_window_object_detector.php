<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_sliding_window_object_detector.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/jsk_perception/nodes/non_maximum_suppression.php');
RGD::import('ros/nodelet/nodes/sliding_window_object_detector.php');
RGD::import('ros/jsk_perception/nodes/tile_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
