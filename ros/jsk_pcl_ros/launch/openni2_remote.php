<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/openni2_remote.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/image_transport/nodes/republish_rgb_image_raw.php');
RGD::import('ros/image_transport/nodes/republish_depth_registered_image_raw.php');
RGD::import('ros/nodelet/nodes/depth_registered_rectify_depth.php');
RGD::import('ros/nodelet/nodes/points_xyzrgb_hw_registered.php');
RGD::import('ros/nodelet/nodes/depth_calibration.php');
RGD::import('ros/topic_tools/nodes/relay_camera_info.php');
RGD::import('ros/topic_tools/nodes/relay_camera_info.php');
RGD::import('ros/topic_tools/nodes/relay_camera_info.php');
RGD::import('ros/nodelet/nodes/depth_registered_half.php');
RGD::import('ros/nodelet/nodes/$(arg depth)_half.php');
RGD::import('ros/nodelet/nodes/depth_registered_quater.php');
RGD::import('ros/nodelet/nodes/$(arg depth)_quater.php');
RGD::import('ros/nodelet/nodes/$(arg rgb)_half.php');
RGD::import('ros/nodelet/nodes/$(arg rgb)_quater.php');
RGD::import('ros/openni2_launch/launch/openni2.php');
RGD::import('ros/openni2_launch/launch/openni2.php');
