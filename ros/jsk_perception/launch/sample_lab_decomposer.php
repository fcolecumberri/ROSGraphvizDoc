<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_lab_decomposer.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/nodelet/nodes/lab_decomposer.php');
RGD::import('ros/jsk_perception/nodes/tile_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
