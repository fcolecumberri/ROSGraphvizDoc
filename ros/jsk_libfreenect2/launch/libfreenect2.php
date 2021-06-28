<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_libfreenect2/launch/libfreenect2.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg manager).php');
RGD::import('ros/nodelet/nodes/driver.php');
RGD::import('ros/image_proc/nodes/image_proc.php');
RGD::import('ros/nodelet/nodes/depth_image_register.php');
RGD::import('ros/nodelet/nodes/depth_point_xyz.php');
RGD::import('ros/nodelet/nodes/depth_point_xyzrgb.php');
RGD::import('ros/tf/nodes/freenect_tf_frame.php');
RGD::import('ros/resized_image_transport/launch/resized_image_transport.php');
RGD::import('ros/resized_image_transport/launch/resized_image_transport.php');
RGD::import('ros/resized_image_transport/launch/resized_image_transport.php');
