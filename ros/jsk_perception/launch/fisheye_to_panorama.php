<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/launch/fisheye_to_panorama.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/tf/nodes/tf_pub.php');
RGD::import('ros/jsk_perception/nodes/click_to_pose.php');
RGD::import('ros/nodelet/nodes/fisheye_manager.php');
RGD::import('ros/nodelet/nodes/fisheye_to_panorama.php');
RGD::import('ros/nodelet/nodes/fisheye_sphere.php');
RGD::import('ros/image_view2/nodes/fisheye_image_view.php');
RGD::import('ros/image_view/nodes/undistorted_image_view.php');
RGD::import('ros/rviz/nodes/rviz.php');
