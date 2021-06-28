<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_project_image_point.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rostopic/nodes/point_stamped_publisher.php');
RGD::import('ros/nodelet/nodes/project_image_point.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_perception/launch/sample_image_publisher.php');
