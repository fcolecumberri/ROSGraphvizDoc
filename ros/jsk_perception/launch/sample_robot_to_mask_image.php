<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_robot_to_mask_image.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/robot_to_mask_image.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_perception/launch/play_rosbag_pr2_self_see.php');
