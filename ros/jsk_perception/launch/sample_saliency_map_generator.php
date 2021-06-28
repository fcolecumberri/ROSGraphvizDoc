<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_saliency_map_generator.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/saliency_map_generator.php');
RGD::import('ros/jsk_perception/nodes/tile_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
RGD::import('ros/jsk_perception/launch/sample_image_publisher.php');
