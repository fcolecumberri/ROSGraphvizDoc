<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/launch/color_extract_on_table.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/plane_detector.php');
RGD::import('ros/nodelet/nodes/pcl_manager.php');
RGD::import('ros/nodelet/nodes/passthroughz.php');
RGD::import('ros/jsk_perception/nodes/color_extractor.php');
RGD::import('ros/jsk_perception/nodes/euclidean_clustering.php');
