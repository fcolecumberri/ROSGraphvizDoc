<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/launch/face_pose_estimation.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/people_pose_estimation_2d.php');
RGD::import('ros/jsk_perception/nodes/face_pose_estimation.php');
RGD::import('ros/jsk_perception/nodes/draw_rects.php');
RGD::import('ros/jsk_recognition_msgs/nodes/people_poses_to_poses.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/openni2_launch/launch/openni2.php');
