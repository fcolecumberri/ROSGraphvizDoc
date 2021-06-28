<?php
// file: /tmp/ros_RGD/jsk_recognition/resized_image_transport/launch/log_polar.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/resized_image_transport/nodes/log_polar.php');
RGD::import('ros/resized_image_transport/nodes/log_polar_image_resizer.php');
RGD::import('ros/image_transport/nodes/republish_log_polar_image_resizer.php');
RGD::import('ros/resized_image_transport/nodes/log_polar_image_enlarger.php');
RGD::import('ros/resized_image_transport/nodes/inverse_log_polar.php');
