<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_libfreenect2/launch/calib.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/checkerboard_detector/nodes/checkerboard_detector_rgb.php');
RGD::import('ros/checkerboard_detector/nodes/checkerboard_detector_depth.php');
RGD::import('ros/checkerboard_detector/nodes/objectdetection_echo.php');
RGD::import('ros/jsk_libfreenect2/launch/demo.php');
