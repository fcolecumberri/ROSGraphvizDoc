<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_draw_rects.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/jsk_perception/nodes/selective_search.php');
RGD::import('ros/jsk_perception/nodes/draw_rects.php');
RGD::import('ros/image_view/nodes/image_view.php');
