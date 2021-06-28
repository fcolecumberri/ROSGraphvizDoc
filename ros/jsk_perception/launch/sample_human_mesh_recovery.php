<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_human_mesh_recovery.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/people_pose_estimation_2d.php');
RGD::import('ros/jsk_perception/nodes/human_mesh_recovery.php');
RGD::import('ros/jsk_recognition_msgs/nodes/people_poses_to_poses.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_perception/launch/play_rosbag_people.php');
