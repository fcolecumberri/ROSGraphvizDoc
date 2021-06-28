<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/in_hand_recognition.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros/nodes/in_hand_recognition_manager.php');
RGD::import('ros/jsk_pcl_ros/nodes/pcd_reader_with_pose.php');
RGD::import('ros/jsk_pcl_ros/nodes/depth_image_creator.php');
RGD::import('ros/jsk_topic_tools/nodes/info_relay.php');
RGD::import('ros/resized_image_transport/nodes/resizer.php');
RGD::import('ros/nodelet/nodes/depth_image_proc.php');
RGD::import('ros/pr2_navigation_self_filter/nodes/self_filter_sensor.php');
RGD::import('ros/pr2_navigation_self_filter/nodes/self_filter_template.php');
RGD::import('ros/jsk_pcl_ros/nodes/icp_registration.php');
