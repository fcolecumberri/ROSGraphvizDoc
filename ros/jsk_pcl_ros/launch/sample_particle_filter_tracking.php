<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_particle_filter_tracking.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/tf/nodes/optical_frame_tf_publisher.php');
RGD::import('ros/tf/nodes/coffee_cup_tf_publisher.php');
RGD::import('ros/nodelet/nodes/$(arg manager).php');
RGD::import('ros/nodelet/nodes/point_cloud_xyz.php');
RGD::import('ros/nodelet/nodes/organized_multi_plane_segmentation.php');
RGD::import('ros/nodelet/nodes/multi_plane_extraction.php');
RGD::import('ros/nodelet/nodes/voxel_grid_target.php');
RGD::import('ros/nodelet/nodes/pointcloud_database_server.php');
RGD::import('ros/nodelet/nodes/voxel_grid_reference.php');
RGD::import('ros/nodelet/nodes/particle_filter_tracking.php');
RGD::import('ros/rviz/nodes/rviz.php');
