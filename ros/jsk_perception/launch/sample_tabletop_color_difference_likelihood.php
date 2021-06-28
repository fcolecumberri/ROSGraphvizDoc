<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_tabletop_color_difference_likelihood.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/tf/nodes/static_tf_publisher_map_to_camera.php');
RGD::import('ros/jsk_recognition_utils/nodes/polygon_array_publisher.php');
RGD::import('ros/nodelet/nodes/tabletop_color_difference_likelihood.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_perception/launch/sample_image_publisher.php');
