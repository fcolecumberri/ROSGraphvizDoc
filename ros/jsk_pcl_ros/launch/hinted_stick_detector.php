<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/hinted_stick_detector.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/image_view2/nodes/attention_viewer.php');
RGD::import('ros/jsk_pcl_ros/nodes/laser_cloud_from_camera_frame.php');
RGD::import('ros/jsk_pcl_ros/nodes/hinted_stick_finder.php');
RGD::import('ros/nodelet/nodes/candidate_points.php');
