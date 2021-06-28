<?php
// file: /tmp/ros_RGD/jsk_recognition/checkerboard_detector/sample/sample_checkerboard_detector.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/tf/nodes/static_tf_publisher.php');
RGD::import('ros/image_publisher/nodes/image_publisher.php');
RGD::import('ros/checkerboard_detector/nodes/checkerboard_detector.php');
RGD::import('ros/rviz/nodes/rviz.php');
