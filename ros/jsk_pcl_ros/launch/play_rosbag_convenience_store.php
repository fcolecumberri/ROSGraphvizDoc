<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/include/play_rosbag_convenience_store.xml
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/image_transport/nodes/rgb_image_republish.php');
RGD::import('ros/image_transport/nodes/depth_image_republish.php');
RGD::import('ros/nodelet/nodes/points_xyzrgb_hw_registered.php');
