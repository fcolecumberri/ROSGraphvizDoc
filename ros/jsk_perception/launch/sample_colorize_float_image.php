<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_colorize_float_image.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/jsk_perception/nodes/colorize_float_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
