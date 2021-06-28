<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_background_subtraction.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/jsk_perception/nodes/background_subtraction.php');
RGD::import('ros/image_view/nodes/image_view_rgb.php');
RGD::import('ros/image_view/nodes/image_view_fg.php');
RGD::import('ros/openni2_launch/launch/openni2.php');
