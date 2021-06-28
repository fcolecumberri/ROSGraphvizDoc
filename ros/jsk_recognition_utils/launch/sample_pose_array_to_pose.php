<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_recognition_utils/sample/sample_pose_array_to_pose.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rostopic/nodes/pose_array_publisher.php');
RGD::import('ros/jsk_recognition_utils/nodes/pose_array_to_pose.php');
RGD::import('ros/rviz/nodes/rviz.php');
