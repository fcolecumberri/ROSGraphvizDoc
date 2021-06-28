<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/capture/capture_multisense.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros/nodes/capture_stereo_synchronizer.php');
RGD::import('ros/jsk_rviz_plugins/nodes/capture_rviz_text.php');
RGD::import('ros/rviz/nodes/capture_rviz.php');
RGD::import('ros/rostopic/nodes/right_image_subscriber.php');
RGD::import('ros/rosbag/nodes/capture_rosbag.php');
RGD::import('ros/checkerboard_detector/launch/capture.php');
