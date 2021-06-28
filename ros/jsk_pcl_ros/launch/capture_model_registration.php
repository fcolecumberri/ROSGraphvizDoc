<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/capture/capture_model_registration.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/extract_indices_manager.php');
RGD::import('ros/nodelet/nodes/extract_indices.php');
RGD::import('ros/jsk_pcl_ros/nodes/incremental_model_registration.php');
RGD::import('ros/jsk_pcl_ros/nodes/icp_registration.php');
RGD::import('ros/jsk_pcl_ros/nodes/linemod_trainer.php');
RGD::import('ros/image_view/nodes/sample_viewer.php');
RGD::import('ros/image_view/nodes/sample_color_viewer.php');
RGD::import('ros/rviz/nodes/registration_rviz.php');
RGD::import('ros/jsk_pcl_ros/nodes/capture_train_linemod_script.php');
RGD::import('ros/jsk_pcl_ros/launch/capture_stereo_synchronizer_player.php');
