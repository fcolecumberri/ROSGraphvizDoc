<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/depth_error.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/checkerboard_detector/nodes/checkerboard_detector.php');
RGD::import('ros/checkerboard_detector/nodes/objectdetection_to_tf.php');
RGD::import('ros/jsk_pcl_ros/nodes/depth_image_error.php');
