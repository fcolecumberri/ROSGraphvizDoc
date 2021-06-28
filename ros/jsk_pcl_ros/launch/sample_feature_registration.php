<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_feature_registration.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/tf/nodes/static_tf_publisher.php');
RGD::import('ros/pcl_ros/nodes/pcd_to_pointcloud.php');
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/normal_estimation_omp_reference.php');
RGD::import('ros/nodelet/nodes/fpfh_estimation_omp_reference.php');
RGD::import('ros/nodelet/nodes/organized_pass_through.php');
RGD::import('ros/nodelet/nodes/normal_estimation_omp_target.php');
RGD::import('ros/nodelet/nodes/fpfh_estimation_omp_target.php');
RGD::import('ros/nodelet/nodes/feature_registration.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/play_rosbag_pr2_sink.php');
