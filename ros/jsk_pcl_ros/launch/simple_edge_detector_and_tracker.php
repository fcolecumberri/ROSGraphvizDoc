<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/simple_edge_detector_and_tracker.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_pcl_ros/nodes/border_estimator.php');
RGD::import('ros/jsk_perception/nodes/edge.php');
RGD::import('ros/image_view/nodes/edge_view.php');
RGD::import('ros/topic_tools/nodes/edge_relay.php');
RGD::import('ros/nodelet/nodes/mask2pi.php');
RGD::import('ros/nodelet/nodes/indices_add.php');
RGD::import('ros/nodelet/nodes/added.php');
RGD::import('ros/jsk_pcl_ros/launch/tracking.php');
