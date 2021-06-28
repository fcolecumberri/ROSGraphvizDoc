<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_virtual_camera_mono.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/tf/nodes/static_tf_publisher.php');
RGD::import('ros/jsk_perception/nodes/virtual_camera_mono.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_perception/launch/play_rosbag_people.php');
