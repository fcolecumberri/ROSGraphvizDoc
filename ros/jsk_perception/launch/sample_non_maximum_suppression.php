<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_non_maximum_suppression.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/non_maximum_suppression.php');
RGD::import('ros/jsk_perception/nodes/draw_rects_nms.php');
RGD::import('ros/jsk_perception/nodes/tile_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
RGD::import('ros/jsk_perception/launch/sample_selective_search.php');
