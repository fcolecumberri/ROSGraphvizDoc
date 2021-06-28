<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_split_image.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/jsk_perception/nodes/split_image.php');
RGD::import('ros/image_view/nodes/image_view_split_0_0.php');
RGD::import('ros/image_view/nodes/image_view_split_0_1.php');
RGD::import('ros/image_view/nodes/image_view_split_1_0.php');
RGD::import('ros/image_view/nodes/image_view_split_1_1.php');
