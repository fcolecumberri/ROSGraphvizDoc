<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/launch/skeletonization.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/edge_detector.php');
RGD::import('ros/jsk_perception/nodes/dilate_mask_image.php');
RGD::import('ros/jsk_perception/nodes/skeletonization.php');
RGD::import('ros/image_view/nodes/edge_view.php');
RGD::import('ros/rqt_reconfigure/nodes/edge_reconfigure.php');
