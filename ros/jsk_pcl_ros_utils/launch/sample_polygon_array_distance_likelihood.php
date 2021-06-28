<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_polygon_array_distance_likelihood.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/polygon_array_distance_likelihood.php');
RGD::import('ros/topic_tools/nodes/input_likelihood0_to_float.php');
RGD::import('ros/topic_tools/nodes/input_likelihood1_to_float.php');
RGD::import('ros/topic_tools/nodes/input_likelihood2_to_float.php');
RGD::import('ros/topic_tools/nodes/input_likelihood3_to_float.php');
RGD::import('ros/topic_tools/nodes/output_likelihood0_to_float.php');
RGD::import('ros/topic_tools/nodes/output_likelihood1_to_float.php');
RGD::import('ros/topic_tools/nodes/output_likelihood2_to_float.php');
RGD::import('ros/topic_tools/nodes/output_likelihood3_to_float.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_recognition_utils/launch/sample_polygon_array_publisher.php');
