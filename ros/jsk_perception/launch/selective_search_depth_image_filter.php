<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/launch/selective_search_depth_image_filter.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/image_view/nodes/input_image_view.php');
RGD::import('ros/image_view/nodes/input_depth_image_view.php');
RGD::import('ros/jsk_perception/nodes/selective_search.php');
RGD::import('ros/jsk_perception/nodes/rect_array_marker.php');
RGD::import('ros/image_view2/nodes/selective_search_view.php');
RGD::import('ros/jsk_perception/nodes/rect_array_actual_size_filter.php');
RGD::import('ros/jsk_perception/nodes/filtered_rect_array_marker.php');
RGD::import('ros/image_view2/nodes/filtered_selective_search_view.php');
