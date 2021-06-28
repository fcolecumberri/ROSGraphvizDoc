<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/passthrough_image.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/pass_through_z.php');
RGD::import('ros/nodelet/nodes/organized_to_pi.php');
RGD::import('ros/nodelet/nodes/pi_to_maskimage.php');
RGD::import('ros/nodelet/nodes/apply_mask.php');
RGD::import('ros/nodelet/nodes/laser_registration_depth_image_creator.php');
