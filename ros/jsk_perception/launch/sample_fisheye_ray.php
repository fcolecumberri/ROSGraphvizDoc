<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_fisheye_ray.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/image_view2/nodes/image_view2.php');
RGD::import('ros/rostopic/nodes/static_2d_point_publisher.php');
RGD::import('ros/jsk_perception/nodes/fisheye_ray.php');
RGD::import('ros/rviz/nodes/rviz.php');
