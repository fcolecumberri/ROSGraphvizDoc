<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/laser_multi_plane_detection.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/laser_filters/nodes/tilt_scan_to_cloud.php');
RGD::import('ros/nodelet/nodes/tilt_laser_manager.php');
RGD::import('ros/nodelet/nodes/transform_cloud.php');
RGD::import('ros/nodelet/nodes/euclidean_clustering.php');
RGD::import('ros/nodelet/nodes/euclidean_clustering_decomposer.php');
RGD::import('ros/nodelet/nodes/line_segment_detector.php');
RGD::import('ros/nodelet/nodes/line_segment_decomposer.php');
RGD::import('ros/nodelet/nodes/tilt_scan_listener.php');
RGD::import('ros/nodelet/nodes/line_segment_collector.php');
RGD::import('ros/nodelet/nodes/connected_segment.php');
RGD::import('ros/nodelet/nodes/multi_plane_decomposer.php');
RGD::import('ros/nodelet/nodes/line_segment_clustering.php');
RGD::import('ros/nodelet/nodes/line_segment_clustering_decomposer.php');
RGD::import('ros/nodelet/nodes/multi_plane_detector.php');
