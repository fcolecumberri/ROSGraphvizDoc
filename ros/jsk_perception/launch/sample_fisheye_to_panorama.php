<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_fisheye_to_panorama.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/nodelet/nodes/fisheye_to_panorama_rectify.php');
RGD::import('ros/nodelet/nodes/fisheye_to_panorama.php');
RGD::import('ros/jsk_perception/nodes/tile_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
