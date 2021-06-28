<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_xyz_to_screenpoint.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/rostopic/nodes/reference_point_publisher.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/xyz_to_screenpoint.php');
