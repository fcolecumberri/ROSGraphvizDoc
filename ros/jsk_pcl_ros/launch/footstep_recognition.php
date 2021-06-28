<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/footstep_recognition.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg MANAGER).php');
RGD::import('ros/nodelet/nodes/$(arg MANAGER).php');
RGD::import('ros/nodelet/nodes/organized_pass_through_x.php');
RGD::import('ros/nodelet/nodes/organized_pass_through_y.php');
RGD::import('ros/nodelet/nodes/pass_through_z.php');
RGD::import('ros/nodelet/nodes/input_relay.php');
RGD::import('ros/nodelet/nodes/joint_static_filter.php');
RGD::import('ros/nodelet/nodes/multi_plane_estimate.php');
RGD::import('ros/nodelet/nodes/footstep_polygon_publisher.php');
RGD::import('ros/nodelet/nodes/ground_wall_separator.php');
RGD::import('ros/jsk_pcl_ros/nodes/env_server.php');
RGD::import('ros/nodelet/nodes/footstep_respected_to_odom.php');
RGD::import('ros/nodelet/nodes/transform_input.php');
RGD::import('ros/nodelet/nodes/cluster_decomposer.php');
RGD::import('ros/nodelet/nodes/cluster_decomposer2.php');
RGD::import('ros/nodelet/nodes/plane_extraction.php');
RGD::import('ros/nodelet/nodes/estimated_plane_respected_to_odom.php');
RGD::import('ros/diagnostic_aggregator/nodes/pcl_diagnostic_aggregator.php');
RGD::import('ros/rqt_robot_monitor/nodes/pcl_diagnostics_monitor.php');
