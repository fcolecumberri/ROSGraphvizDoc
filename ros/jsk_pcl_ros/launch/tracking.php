<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/tracking.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg manager).php');
RGD::import('ros/nodelet/nodes/voxelgrid.php');
RGD::import('ros/nodelet/nodes/particle_filter_tracker.php');
RGD::import('ros/nodelet/nodes/selected_cloud_downsampler.php');
RGD::import('ros/jsk_pcl_ros/nodes/renew_tracking.php');
RGD::import('ros/jsk_pcl_ros/nodes/marker_model_tracking.php');
