<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_fuse_images.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg MANAGER).php');
RGD::import('ros/nodelet/nodes/depth_image_creator.php');
RGD::import('ros/image_view/nodes/depth_view.php');
RGD::import('ros/nodelet/nodes/depth_image_creator.php');
RGD::import('ros/image_view/nodes/depth_view.php');
RGD::import('ros/nodelet/nodes/point_cloud_concat.php');
RGD::import('ros/nodelet/nodes/depth_image_creator.php');
RGD::import('ros/image_view/nodes/depth_view.php');
RGD::import('ros/nodelet/nodes/fuse_rgb_images.php');
RGD::import('ros/nodelet/nodes/fuse_depth_images.php');
RGD::import('ros/nodelet/nodes/point_cloud_xyzrgb.php');
RGD::import('ros/image_view/nodes/depth_view.php');
RGD::import('ros/jsk_perception/nodes/tile_image.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/jsk_pcl_ros/launch/play_rosbag_stereo.php');
