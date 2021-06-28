<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/rgbd_mapping_multisense.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rtabmap_ros/nodes/stereo_odometry.php');
RGD::import('ros/rtabmap_ros/nodes/rtabmap.php');
RGD::import('ros/rtabmap_ros/nodes/map_optimizer.php');
RGD::import('ros/rtabmap_ros/nodes/map_assembler.php');
RGD::import('ros/rviz/nodes/rviz.php');
