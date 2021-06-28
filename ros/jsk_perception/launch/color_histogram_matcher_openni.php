<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/launch/color_histogram_matcher_openni.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/color_histogram_sliding_matcher.php');
RGD::import('ros/nodelet/nodes/screenpoint_manager.php');
RGD::import('ros/nodelet/nodes/pointcloud_screenpoint_nodelet.php');
RGD::import('ros/jsk_interactive_marker/nodes/bounding_box_color_histogram.php');
