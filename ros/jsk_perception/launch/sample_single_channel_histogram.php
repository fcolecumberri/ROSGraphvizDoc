<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_single_channel_histogram.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/nodelet/nodes/single_channel_histogram.php');
RGD::import('ros/topic_tools/nodes/color_histogram_to_histogram_with_range.php');
RGD::import('ros/jsk_rqt_plugins/nodes/rqt_histogram_plot.php');
RGD::import('ros/image_view/nodes/image_view.php');
