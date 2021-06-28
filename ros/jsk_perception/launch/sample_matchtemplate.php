<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_matchtemplate.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher_search.php');
RGD::import('ros/jsk_perception/nodes/image_publisher_reference.php');
RGD::import('ros/rostopic/nodes/reference_point_publisher.php');
RGD::import('ros/rostopic/nodes/search_rect_publisher.php');
RGD::import('ros/jsk_perception/nodes/matchtemplate.php');
RGD::import('ros/image_view/nodes/image_view_debug_image.php');
RGD::import('ros/image_view/nodes/image_view_current_template.php');
