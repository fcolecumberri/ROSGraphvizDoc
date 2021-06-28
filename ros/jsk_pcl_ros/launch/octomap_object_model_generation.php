<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/octomap_object_model_generation.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros/nodes/publish_clicked_point_bbox.php');
RGD::import('ros/jsk_topic_tools/nodes/octomap_passthrough.php');
RGD::import('ros/jsk_pcl_ros/nodes/attention_clipper.php');
RGD::import('ros/jsk_pcl_ros/nodes/bbox_cluster_point_indices_decomposer.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/tf_transform_for_octomap.php');
RGD::import('ros/jsk_pcl_ros/nodes/octomap_server.php');
RGD::import('ros/jsk_pcl_ros/nodes/octomap_euclidean_clustering.php');
RGD::import('ros/jsk_pcl_ros/nodes/octomap_cluster_point_indices_decomposer.php');
RGD::import('ros/jsk_interactive_marker/nodes/bounding_box_marker.php');
RGD::import('ros/jsk_pcl_ros/nodes/selected_cloud.php');
RGD::import('ros/jsk_pcl_ros/nodes/pointcloud_transform_in_box.php');
RGD::import('ros/pcl_ros/nodes/pcd_saver.php');
