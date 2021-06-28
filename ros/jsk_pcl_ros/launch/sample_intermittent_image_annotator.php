<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_intermittent_image_annotator.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/jsk_recognition_utils/nodes/polygon_array_publisher.php');
RGD::import('ros/jsk_recognition_utils/nodes/polygon_array_to_polygon.php');
RGD::import('ros/nodelet/nodes/sample_manager.php');
RGD::import('ros/image_transport/nodes/republish_rgb.php');
RGD::import('ros/image_transport/nodes/republish_depth.php');
RGD::import('ros/nodelet/nodes/point_cloud_xyzrgb.php');
RGD::import('ros/nodelet/nodes/intermittent_image_annotator.php');
RGD::import('ros/jsk_pcl_ros/nodes/sample_empty_service_caller.php');
RGD::import('ros/rviz/nodes/rviz.php');
