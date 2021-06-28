<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/particle_filter_localization.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros/nodes/full_laser_cloud_from_root.php');
RGD::import('ros/jsk_pcl_ros/nodes/scan_cloud_from_root.php');
RGD::import('ros/nodelet/nodes/downsampled_full_cloud.php');
RGD::import('ros/nodelet/nodes/downsampled_scan.php');
RGD::import('ros/jsk_topic_tools/nodes/full_cloud_snapshot.php');
RGD::import('ros/jsk_pcl_ros/nodes/pfilter_localization.php');
