<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_people_detection.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/nodelet/nodes/$(arg MANAGER).php');
RGD::import('ros/nodelet/nodes/zaxis_filter.php');
RGD::import('ros/nodelet/nodes/footstep_polygon_publisher.php');
RGD::import('ros/nodelet/nodes/polygon_array_transformer.php');
RGD::import('ros/nodelet/nodes/people_detection.php');
RGD::import('ros/nodelet/nodes/extract_people.php');
RGD::import('ros/nodelet/nodes/roi_clipper.php');
RGD::import('ros/image_view/nodes/image_view0.php');
RGD::import('ros/image_view/nodes/image_view1.php');
