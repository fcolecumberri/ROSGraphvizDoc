<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/launch/sliding_window_object_detector.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/sliding_window_object_detector.php');
RGD::import('ros/jsk_perception/nodes/non_maximum_suppression.php');
RGD::import('ros/image_view/nodes/detector.php');
RGD::import('ros/rqt_reconfigure/nodes/detector_reconfigure.php');
