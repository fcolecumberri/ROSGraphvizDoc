<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_roi_to_mask_image.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rostopic/nodes/camera_info_publisher.php');
RGD::import('ros/nodelet/nodes/roi_to_mask_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
