<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_boundingbox_occlusion_rejector.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_interactive_marker/nodes/sensor_frame.php');
RGD::import('ros/jsk_interactive_marker/nodes/target_frame.php');
RGD::import('ros/jsk_interactive_marker/nodes/dummy_camera.php');
RGD::import('ros/jsk_pcl_ros/nodes/sample_boundingbox_occlusion_rejector.php');
RGD::import('ros/jsk_pcl_ros/nodes/sensor_target.php');
RGD::import('ros/jsk_pcl_ros/nodes/sensor_candidate.php');
RGD::import('ros/jsk_pcl_ros/nodes/boundingbox_occlusion_rejector.php');
RGD::import('ros/rviz/nodes/rviz.php');
