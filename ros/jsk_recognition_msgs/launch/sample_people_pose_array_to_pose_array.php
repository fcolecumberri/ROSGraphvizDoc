<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_recognition_msgs/sample/sample_people_pose_array_to_pose_array.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/tf/nodes/static_tf_publisher.php');
RGD::import('ros/rostopic/nodes/people_pose_array_publisher.php');
RGD::import('ros/jsk_recognition_msgs/nodes/people_pose_array_to_pose_array.php');
RGD::import('ros/rviz/nodes/rviz.php');
