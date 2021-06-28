<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_unwrap_histogram_with_range_array.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rostopic/nodes/histogram_with_range_array_publisher.php');
RGD::import('ros/jsk_perception/nodes/unwrap_histogram_with_range_array.php');
RGD::import('ros/jsk_rqt_plugins/nodes/rqt_histogram_plot.php');
