<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_icp_registration_2d.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg manager).php');
RGD::import('ros/rostopic/nodes/kettle_pose_publisher.php');
RGD::import('ros/nodelet/nodes/pcd_reader_with_pose.php');
RGD::import('ros/nodelet/nodes/input_relay.php');
RGD::import('ros/nodelet/nodes/pass_through.php');
RGD::import('ros/nodelet/nodes/organized_multi_plane_segmentation.php');
RGD::import('ros/nodelet/nodes/plane_reasoner.php');
RGD::import('ros/nodelet/nodes/plane_concatenator.php');
RGD::import('ros/nodelet/nodes/polygon_magnifier.php');
RGD::import('ros/nodelet/nodes/multi_plane_extraction.php');
RGD::import('ros/nodelet/nodes/euclidean_clustering.php');
RGD::import('ros/nodelet/nodes/euclidean_clustering_decomposer.php');
RGD::import('ros/nodelet/nodes/polygon_array_area_likelihood.php');
RGD::import('ros/jsk_pcl_ros/nodes/extract_top_polygon_likelihood.php');
RGD::import('ros/nodelet/nodes/centroid_publisher.php');
RGD::import('ros/nodelet/nodes/downsample_input.php');
RGD::import('ros/nodelet/nodes/tf_transform_cloud.php');
RGD::import('ros/nodelet/nodes/downsample_reference.php');
RGD::import('ros/nodelet/nodes/icp_registration.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/play_rosbag_pr2_sink.php');
