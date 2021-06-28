<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_depth_image_error.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_recognition_utils/nodes/sample_rgb_image_publisher.php');
RGD::import('ros/jsk_recognition_utils/nodes/sample_depth_image_publisher.php');
RGD::import('ros/tf/nodes/static_tf_publisher.php');
RGD::import('ros/checkerboard_detector/nodes/checkerboard_detector.php');
RGD::import('ros/nodelet/nodes/depth_image_error.php');
RGD::import('ros/topic_tools/nodes/extract_true_depth.php');
RGD::import('ros/topic_tools/nodes/extract_observed_depth.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/openni2_launch/launch/openni2.php');
