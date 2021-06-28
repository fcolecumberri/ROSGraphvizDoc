<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_sparse_image_encoder_decoder.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/image_view/nodes/image_view_edge.php');
RGD::import('ros/image_view/nodes/image_view_edge_sparse.php');
RGD::import('ros/opencv_apps/launch/edge_detection.php');
RGD::import('ros/jsk_perception/launch/sparse_image_encoder.php');
RGD::import('ros/jsk_perception/launch/sparse_image_decoder.php');
