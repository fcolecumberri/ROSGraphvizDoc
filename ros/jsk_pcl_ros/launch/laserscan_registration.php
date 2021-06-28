<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/laserscan_registration.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_tilt_laser/nodes/tilt_laser_controller.php');
RGD::import('ros/topic_tools/nodes/laserscan_registration_camera_info_publisher.php');
RGD::import('ros/nodelet/nodes/laserscan_registration_manager.php');
RGD::import('ros/nodelet/nodes/laserscan_registration_manager.php');
RGD::import('ros/nodelet/nodes/laser_registration_depth_image_creator.php');
RGD::import('ros/nodelet/nodes/laser_registration_depth_register.php');
RGD::import('ros/nodelet/nodes/laser_registration_point_cloud_xyzrgb.php');
RGD::import('ros/jsk_tilt_laser/launch/laser_pipeline.php');
