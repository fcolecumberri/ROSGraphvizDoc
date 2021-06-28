<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/test/test_ppf_registration.test
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg manager).php');
RGD::import('ros/nodelet/nodes/pointcloud_database_server.php');
RGD::import('ros/nodelet/nodes/subsample_input.php');
RGD::import('ros/nodelet/nodes/subsample_reference.php');
RGD::import('ros/nodelet/nodes/ppf_registration.php');
