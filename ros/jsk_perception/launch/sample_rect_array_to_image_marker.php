<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_rect_array_to_image_marker.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/jsk_perception/nodes/selective_search.php');
RGD::import('ros/jsk_perception/nodes/rect_array_to_image_marker.php');
RGD::import('ros/image_view2/nodes/image_view2.php');
