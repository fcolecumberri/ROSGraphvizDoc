<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_roi_to_rect.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rostopic/nodes/camera_info_publisher.php');
RGD::import('ros/nodelet/nodes/roi_to_polygon_rect.php');
RGD::import('ros/rviz/nodes/rviz.php');
