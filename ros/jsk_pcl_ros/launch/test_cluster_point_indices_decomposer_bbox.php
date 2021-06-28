<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/test/test_cluster_point_indices_decomposer_bbox.test
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/publish_pointcloud.php');
RGD::import('ros/image_transport/nodes/republish_rgb.php');
RGD::import('ros/image_transport/nodes/republish_depth_registered.php');
RGD::import('ros/jsk_perception/nodes/mask_image_generator.php');
RGD::import('ros/jsk_perception/nodes/mask_image_to_label.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/label_to_cluster_point_indices.php');
RGD::import('ros/jsk_pcl_ros/nodes/cluster_point_indices_decomposer.php');
RGD::import('ros/jsk_pcl_ros/nodes/cluster_point_indices_decomposer_align_boxes_with_frame.php');
RGD::import('ros/jsk_pcl_ros/nodes/cluster_point_indices_decomposer_pca.php');
RGD::import('ros/openni2_launch/launch/openni2.php');
