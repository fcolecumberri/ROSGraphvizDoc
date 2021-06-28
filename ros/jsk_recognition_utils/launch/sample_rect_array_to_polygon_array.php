<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_recognition_utils/sample/sample_rect_array_to_polygon_array.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/tf/nodes/static_tf_publisher.php');
RGD::import('ros/rostopic/nodes/rect_array_publisher.php');
RGD::import('ros/jsk_recognition_utils/nodes/rect_array_to_polygon_array.php');
RGD::import('ros/rviz/nodes/rviz.php');
