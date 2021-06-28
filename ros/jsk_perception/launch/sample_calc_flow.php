<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_calc_flow.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/jsk_perception/nodes/calc_flow.php');
RGD::import('ros/image_view/nodes/image_view0.php');
RGD::import('ros/image_view/nodes/image_view1.php');
RGD::import('ros/openni2_launch/launch/openni2.php');
