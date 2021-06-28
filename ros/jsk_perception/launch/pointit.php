<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/launch/pointit.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/people_pose_estimation_2d.php');
RGD::import('ros/jsk_perception/nodes/pointit.php');
RGD::import('ros/jsk_pcl_ros/launch/tabletop_object_detector.php');
