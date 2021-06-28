<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_polygon_array_color_likelihood.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/unwrap_histogram_with_range_array_reference.php');
RGD::import('ros/nodelet/nodes/polygon_array_color_likelihood.php');
RGD::import('ros/topic_tools/nodes/extract_likelihood0.php');
RGD::import('ros/topic_tools/nodes/extract_likelihood1.php');
RGD::import('ros/topic_tools/nodes/extract_likelihood2.php');
RGD::import('ros/jsk_rqt_plugins/nodes/histogram_plot_reference.php');
RGD::import('ros/jsk_perception/nodes/unwrap_histogram_with_range_array_polygon0.php');
RGD::import('ros/jsk_rqt_plugins/nodes/histogram_plot_polygon0.php');
RGD::import('ros/jsk_perception/nodes/unwrap_histogram_with_range_array_polygon1.php');
RGD::import('ros/jsk_rqt_plugins/nodes/histogram_plot_polygon1.php');
RGD::import('ros/jsk_perception/nodes/unwrap_histogram_with_range_array_polygon2.php');
RGD::import('ros/jsk_rqt_plugins/nodes/histogram_plot_polygon2.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_perception/launch/sample_polygon_array_color_histogram.php');
