<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_recognition_utils/sample/sample_rect_array_to_cluster_point_indices.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/rostopic/nodes/rect_array_publisher.php');
RGD::import('ros/jsk_recognition_utils/nodes/rects_to_cpi.php');
RGD::import('ros/jsk_perception/nodes/image_cluster_indices_decomposer.php');
RGD::import('ros/image_view/nodes/image_view.php');
