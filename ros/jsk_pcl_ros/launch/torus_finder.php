<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/torus_finder.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/image_view2/nodes/image_view2.php');
RGD::import('ros/jsk_perception/nodes/rect_to_mask_image.php');
RGD::import('ros/jsk_pcl_ros/nodes/laser_cloud_from_camera_frame.php');
RGD::import('ros/jsk_pcl_ros/nodes/mask_image_filter.php');
RGD::import('ros/nodelet/nodes/mask_image_filter_points.php');
RGD::import('ros/jsk_pcl_ros/nodes/handle_detector.php');
RGD::import('ros/image_view/nodes/mask_image_view.php');
