<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_pointit.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/tf/nodes/static_tf_publisher.php');
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/jsk_recognition_utils/nodes/bounding_box_array_publisher.php');
RGD::import('ros/rostopic/nodes/people_pose_array_publisher.php');
RGD::import('ros/jsk_perception/nodes/pointit.php');
RGD::import('ros/rviz/nodes/rviz.php');
