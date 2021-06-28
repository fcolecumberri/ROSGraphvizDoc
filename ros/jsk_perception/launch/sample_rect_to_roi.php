<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_rect_to_roi.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rostopic/nodes/rect_array_publisher.php');
RGD::import('ros/jsk_recognition_utils/nodes/rect_array_to_polygon_array.php');
RGD::import('ros/jsk_recognition_utils/nodes/polygon_array_to_polygon.php');
RGD::import('ros/rostopic/nodes/camera_info_publisher.php');
RGD::import('ros/nodelet/nodes/polygon_rect_to_roi.php');
RGD::import('ros/rviz/nodes/rviz.php');
