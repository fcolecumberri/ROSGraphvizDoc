<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_centroid_publisher.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/centroid_publisher.php');
RGD::import('ros/nodelet/nodes/passthrough.php');
RGD::import('ros/nodelet/nodes/centroid_publisher_nan_input.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros_utils/launch/play_rosbag_arc2017_4objects.php');
