<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_mask_image_to_roi.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/nodelet/nodes/mask_image_to_roi.php');
RGD::import('ros/rviz/nodes/rviz.php');
