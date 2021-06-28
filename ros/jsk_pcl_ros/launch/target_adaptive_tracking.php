<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/target_adaptive_tracking.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros/nodes/target_adaptive_tracking.php');
RGD::import('ros/rviz/nodes/particle_filter_rviz.php');
RGD::import('ros/jsk_pcl_ros/nodes/supervoxel_segmentation_decomposer.php');
RGD::import('ros/rqt_reconfigure/nodes/rqt_reconfigure.php');
RGD::import('ros/rviz/nodes/target_adaptive_tracking_rviz.php');
RGD::import('ros/multilayer_object_tracking/launch/object_model_annotation.php');
RGD::import('ros/jsk_pcl_ros/launch/tracking.php');
