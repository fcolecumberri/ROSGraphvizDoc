<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/launch/color_histogram_sample.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/usb_cam/nodes/usb_cam.php');
RGD::import('ros/jsk_perception/nodes/color_histogram.php');
RGD::import('ros/image_view2/nodes/image_view2.php');
RGD::import('ros/jsk_rqt_plugins/nodes/red_histogram.php');
RGD::import('ros/jsk_rqt_plugins/nodes/hue_histogram.php');
