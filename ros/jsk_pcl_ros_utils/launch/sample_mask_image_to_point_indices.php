<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_mask_image_to_point_indices.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/mask_image_publisher.php');
RGD::import('ros/jsk_perception/nodes/color_image_publisher.php');
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/nodelet/nodes/mask_image_to_point_indices0.php');
RGD::import('ros/nodelet/nodes/point_indices_to_mask_image0.php');
RGD::import('ros/nodelet/nodes/mask_image_to_point_indices1.php');
RGD::import('ros/nodelet/nodes/point_indices_to_mask_image1.php');
RGD::import('ros/nodelet/nodes/mask_image_to_point_indices2.php');
RGD::import('ros/nodelet/nodes/cluster_point_indices_to_point_indices2.php');
RGD::import('ros/nodelet/nodes/point_indices_to_mask_image2.php');
RGD::import('ros/jsk_perception/nodes/tile_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
