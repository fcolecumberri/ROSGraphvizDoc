<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_cluster_point_indices_decomposer_sort_by.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg MANAGER).php');
RGD::import('ros/nodelet/nodes/resize_points_publisher.php');
RGD::import('ros/nodelet/nodes/image_resizer.php');
RGD::import('ros/nodelet/nodes/attention_clipper.php');
RGD::import('ros/nodelet/nodes/extract_indices.php');
RGD::import('ros/nodelet/nodes/label_to_cluster_indices.php');
RGD::import('ros/nodelet/nodes/cluster_point_indices_decomposer.php');
RGD::import('ros/nodelet/nodes/bboxes_to_bbox.php');
RGD::import('ros/nodelet/nodes/cluster_point_indices_decomposer_z_axis.php');
RGD::import('ros/nodelet/nodes/bboxes_to_bbox_z_axis.php');
RGD::import('ros/nodelet/nodes/cluster_point_indices_decomposer_cloud_size.php');
RGD::import('ros/nodelet/nodes/bboxes_to_bbox_cloud_size.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_arc2017_4objects.php');
