<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_rearrange_bounding_box.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/tf/nodes/static_tf_publisher_map_to_shelf.php');
RGD::import('ros/jsk_recognition_utils/nodes/bounding_box_array_publisher.php');
RGD::import('ros/jsk_pcl_ros/nodes/rearrange_bounding_box.php');
RGD::import('ros/rviz/nodes/rviz.php');
