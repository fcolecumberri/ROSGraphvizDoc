<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_octomap_server_contact_pr2.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/joint_state_publisher/nodes/joint_state_publisher.php');
RGD::import('ros/robot_state_publisher/nodes/robot_state_publisher.php');
RGD::import('ros/jsk_pcl_ros/nodes/octomap_server.php');
RGD::import('ros/roseus/nodes/publish_sensor_for_octomap_pr2.php');
RGD::import('ros/tf/nodes/robot_to_octomap.php');
RGD::import('ros/jsk_pcl_ros/nodes/test_contact_sensor.php');
RGD::import('ros/rviz/nodes/rviz.php');
