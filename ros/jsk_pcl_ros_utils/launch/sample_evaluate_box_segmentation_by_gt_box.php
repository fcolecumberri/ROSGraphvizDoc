<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/sample/sample_evaluate_box_segmentation_by_gt_box.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_recognition_utils/nodes/bounding_box_array_publisher.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/boxes_to_gt_box.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/boxes_to_box.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/evaluate_box_segmentation_by_gt_box.php');
