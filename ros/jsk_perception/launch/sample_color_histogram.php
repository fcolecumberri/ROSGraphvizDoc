<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_color_histogram.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/jsk_perception/nodes/color_histogram.php');
RGD::import('ros/image_view2/nodes/image_view2.php');
RGD::import('ros/image_view2/nodes/publish_mouse_event.php');
RGD::import('ros/jsk_rqt_plugins/nodes/rqt_histogram_red.php');
RGD::import('ros/jsk_rqt_plugins/nodes/rqt_histogram_hue.php');
