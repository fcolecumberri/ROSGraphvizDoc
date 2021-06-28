<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_depth_calibration.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/depth_calibration.php');
RGD::import('ros/image_view/nodes/input_depth_viz.php');
RGD::import('ros/image_view/nodes/output_depth_viz.php');
RGD::import('ros/jsk_perception/nodes/tile_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
RGD::import('ros/jsk_pcl_ros/launch/play_rosbag_pr2_sink.php');
