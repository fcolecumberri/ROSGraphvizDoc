<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_skeletonization.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/nodelet/nodes/skeletonization.php');
RGD::import('ros/image_view/nodes/skeletonization_viz.php');
RGD::import('ros/jsk_perception/nodes/tile_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
