<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/tabletop_object_detector.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rviz/nodes/rviz_tabletop.php');
RGD::import('ros/nodelet/nodes/$(arg manager).php');
RGD::import('ros/nodelet/nodes/input_relay.php');
RGD::import('ros/nodelet/nodes/multi_plane_estimate.php');
RGD::import('ros/nodelet/nodes/polygon_magnifier.php');
RGD::import('ros/nodelet/nodes/plane_extraction.php');
RGD::import('ros/nodelet/nodes/euclidean_clustering.php');
RGD::import('ros/nodelet/nodes/throttle_segmentation.php');
RGD::import('ros/nodelet/nodes/segmentation_decomposer.php');
RGD::import('ros/jsk_interactive_marker/nodes/bounding_box_marker.php');
RGD::import('ros/nodelet/nodes/selected_cloud.php');
RGD::import('ros/nodelet/nodes/octree_change_detector.php');
RGD::import('ros/nodelet/nodes/octree_change_detector_euclidean_filter.php');
RGD::import('ros/nodelet/nodes/octree_change_detector_euclidean_filter_points.php');
RGD::import('ros/nodelet/nodes/voxelgrid.php');
RGD::import('ros/nodelet/nodes/model_voxelgrid.php');
RGD::import('ros/nodelet/nodes/particle_filter_tracker.php');
RGD::import('ros/nodelet/nodes/cloud_on_plane.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/cloud_on_plane_info.php');
RGD::import('ros/jsk_pcl_ros/nodes/tracker_status_info.php');
RGD::import('ros/jsk_rviz_plugins/nodes/vel_min_text.php');
RGD::import('ros/jsk_rviz_plugins/nodes/vel_max_text.php');
RGD::import('ros/jsk_rviz_plugins/nodes/tm_min_text.php');
RGD::import('ros/jsk_rviz_plugins/nodes/tm_max_text.php');
RGD::import('ros/openni_launch/launch/openni.php');
