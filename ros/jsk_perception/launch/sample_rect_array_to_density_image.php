<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_rect_array_to_density_image.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/rect_array_to_density_image.php');
RGD::import('ros/jsk_perception/nodes/colorize_float_image.php');
RGD::import('ros/image_view/nodes/$(anon image_view).php');
RGD::import('ros/jsk_perception/launch/sample_selective_search.php');
