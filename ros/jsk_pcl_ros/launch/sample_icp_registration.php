<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_icp_registration.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/tf/nodes/optical_frame_tf_publisher.php');
RGD::import('ros/tf/nodes/coffee_cup_tf_publisher.php');
RGD::import('ros/nodelet/nodes/$(arg manager).php');
RGD::import('ros/nodelet/nodes/depth_to_points.php');
RGD::import('ros/nodelet/nodes/multi_plane_estimate.php');
RGD::import('ros/nodelet/nodes/polygon_magnifier.php');
RGD::import('ros/nodelet/nodes/plane_extraction.php');
RGD::import('ros/nodelet/nodes/subsample_input.php');
RGD::import('ros/nodelet/nodes/pointcloud_database_server.php');
RGD::import('ros/nodelet/nodes/subsample_reference.php');
RGD::import('ros/nodelet/nodes/icp_registration.php');
RGD::import('ros/rviz/nodes/rviz.php');
