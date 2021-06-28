<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/fisheye_sphere.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/nodelet/nodes/fisheye_manager.php');
RGD::import('ros/nodelet/nodes/fisheye_sphere_publisher.php');
RGD::import('ros/tf/nodes/tf_pub.php');
RGD::import('ros/rviz/nodes/rviz.php');
