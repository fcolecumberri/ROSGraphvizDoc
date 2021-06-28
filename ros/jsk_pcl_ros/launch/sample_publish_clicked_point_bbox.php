<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_publish_clicked_point_bbox.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/tf/nodes/static_tf_publisher_odom_to_sample_point.php');
RGD::import('ros/rostopic/nodes/sample_point_publisher.php');
RGD::import('ros/jsk_pcl_ros/nodes/publish_clicked_point_bbox.php');
RGD::import('ros/rviz/nodes/rviz.php');
