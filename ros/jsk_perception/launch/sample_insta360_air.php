<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_insta360_air.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/split_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
RGD::import('ros/jsk_perception/launch/libuvc_camera.php');
RGD::import('ros/jsk_perception/launch/usb_cam.php');
RGD::import('ros/jsk_perception/launch/sample_dual_fisheye_to_panorama.php');
