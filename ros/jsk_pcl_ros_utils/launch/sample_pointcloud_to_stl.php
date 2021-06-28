<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_pointcloud_to_stl.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/image_transport/nodes/republish_rgb.php');
RGD::import('ros/image_transport/nodes/republish_depth.php');
RGD::import('ros/topic_tools/nodes/relay_camera_info.php');
RGD::import('ros/nodelet/nodes/pointcloud_to_stl.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/openni2_launch/launch/openni2.php');
