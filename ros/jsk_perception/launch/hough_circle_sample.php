<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/launch/hough_circle_sample.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/usb_cam/nodes/usb_cam.php');
RGD::import('ros/jsk_perception/nodes/hough_circles.php');
RGD::import('ros/image_view2/nodes/image_view2.php');
