<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/test/primitive_shape_classifier.test
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros/nodes/simulate.php');
RGD::import('ros/tf/nodes/tf_pub.php');
RGD::import('ros/jsk_pcl_ros/nodes/euclidean_clustering.php');
RGD::import('ros/jsk_pcl_ros/nodes/normal_estimation.php');
RGD::import('ros/jsk_pcl_ros/nodes/primtive_shape_classifier.php');
