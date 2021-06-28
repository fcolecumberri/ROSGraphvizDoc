<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_polygon_array_color_histogram.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/tf/nodes/static_tf_publisher_map_to_camera.php');
RGD::import('ros/jsk_recognition_utils/nodes/polygon_array_publisher.php');
RGD::import('ros/nodelet/nodes/polygon_array_color_histogram.php');
RGD::import('ros/jsk_perception/nodes/unwrap_histogram_with_range_array0.php');
RGD::import('ros/jsk_rqt_plugins/nodes/histogram_plot_polygon0.php');
RGD::import('ros/jsk_perception/nodes/unwrap_histogram_with_range_array1.php');
RGD::import('ros/jsk_rqt_plugins/nodes/histogram_plot_polygon1.php');
RGD::import('ros/jsk_perception/nodes/unwrap_histogram_with_range_array2.php');
RGD::import('ros/jsk_rqt_plugins/nodes/histogram_plot_polygon2.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_perception/launch/sample_image_publisher.php');
