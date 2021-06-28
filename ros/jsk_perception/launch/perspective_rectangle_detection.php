<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/launch/perspective_rectangle_detection.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/edge_detector.php');
RGD::import('ros/jsk_perception/nodes/hough_lines.php');
RGD::import('ros/jsk_perception/nodes/rectangle_detector.php');
RGD::import('ros/image_view/nodes/edge_view.php');
RGD::import('ros/image_view/nodes/hough_view.php');
RGD::import('ros/image_view/nodes/rectangle_view.php');
