<?php
// file: /tmp/ros_RGD/image_pipeline/image_proc/launch/image_proc.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/debayer.php');
RGD::import('ros/nodelet/nodes/rectify_mono.php');
RGD::import('ros/nodelet/nodes/rectify_color.php');
