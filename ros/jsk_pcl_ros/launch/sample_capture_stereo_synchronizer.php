<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_capture_stereo_synchronizer.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rostopic/nodes/dummy_pose_publisher.php');
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/mask_image_generator.php');
RGD::import('ros/nodelet/nodes/mask_image_to_point_indices.php');
RGD::import('ros/jsk_pcl_ros/nodes/topic_ensync.php');
RGD::import('ros/nodelet/nodes/capture_stereo_synchronizer.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/play_rosbag_stereo.php');
