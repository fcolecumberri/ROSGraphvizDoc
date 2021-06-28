<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_libfreenect2/launch/demo.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/image_view/nodes/rgb_image_view.php');
RGD::import('ros/image_view/nodes/depth_image_view.php');
RGD::import('ros/image_view/nodes/depth_registered_image_view.php');
RGD::import('ros/image_view/nodes/ir_image_view.php');
RGD::import('ros/rviz/nodes/kinect_rviz.php');
RGD::import('ros/jsk_libfreenect2/launch/libfreenect2.php');
