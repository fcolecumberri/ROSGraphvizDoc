<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/organized_multi_plane_segmentation.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg MANAGER).php');
RGD::import('ros/nodelet/nodes/$(arg MANAGER).php');
RGD::import('ros/pr2_navigation_self_filter/nodes/openni_cloud_self_filter.php');
RGD::import('ros/nodelet/nodes/input_relay.php');
RGD::import('ros/nodelet/nodes/joint_static_filter.php');
RGD::import('ros/nodelet/nodes/multi_plane_estimate.php');
RGD::import('ros/nodelet/nodes/laser_normal_estimation.php');
RGD::import('ros/nodelet/nodes/multi_plane_estimate.php');
RGD::import('ros/nodelet/nodes/polygon_relay.php');
RGD::import('ros/nodelet/nodes/coefficients_relay.php');
RGD::import('ros/nodelet/nodes/colorize_error.php');
RGD::import('ros/nodelet/nodes/cluster_decomposer.php');
RGD::import('ros/nodelet/nodes/cluster_decomposer2.php');
RGD::import('ros/nodelet/nodes/plane_extraction.php');
RGD::import('ros/nodelet/nodes/euclidean_clustering.php');
RGD::import('ros/nodelet/nodes/cluster_decomposer_final.php');
RGD::import('ros/nodelet/nodes/bounding_box_filter.php');
RGD::import('ros/nodelet/nodes/throttle_segmentation.php');
RGD::import('ros/jsk_interactive_marker/nodes/bounding_box_marker.php');
RGD::import('ros/nodelet/nodes/selected_cloud.php');
RGD::import('ros/nodelet/nodes/estimated_plane_respected_to_odom.php');
RGD::import('ros/nodelet/nodes/color_histogram.php');
RGD::import('ros/nodelet/nodes/grid_sampler.php');
RGD::import('ros/nodelet/nodes/grid_sample_decompose.php');
RGD::import('ros/nodelet/nodes/match_result.php');
RGD::import('ros/roseus/nodes/handle_estimator.php');
RGD::import('ros/nodelet/nodes/transform_input.php');
RGD::import('ros/nodelet/nodes/footstep_respected_to_odom.php');
RGD::import('ros/nodelet/nodes/estimated_plane_respected_to_odom.php');
RGD::import('ros/nodelet/nodes/env_server.php');
RGD::import('ros/nodelet/nodes/pointcloud_transform_in_box.php');
RGD::import('ros/nodelet/nodes/pcd_saver.php');
RGD::import('ros/nodelet/nodes/icp_registration.php');
RGD::import('ros/nodelet/nodes/pointcloud_server.php');
RGD::import('ros/jsk_pcl_ros/launch/hrp2jsknt_footstep_polygon.php');
RGD::import('ros/jsk_footstep_controller/launch/hrp2jsknt_real.php');
