<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/extract_only_directed_region_of_close_mask_image.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/multipoints_resize_manager.php');
RGD::import('ros/nodelet/nodes/multi_resizer.php');
RGD::import('ros/resized_image_transport/nodes/image_resizer.php');
RGD::import('ros/jsk_perception/nodes/edge_detector.php');
RGD::import('ros/image_view/nodes/interactive_view.php');
RGD::import('ros/jsk_perception/nodes/mask_image_generator.php');
RGD::import('ros/jsk_perception/nodes/rect_to_mask_image.php');
RGD::import('ros/nodelet/nodes/depth_mask_manager.php');
RGD::import('ros/nodelet/nodes/mask_depth_nodelet.php');
RGD::import('ros/image_view2/nodes/depth_mask_view.php');
RGD::import('ros/image_view/nodes/applied_depth_mask_view.php');
RGD::import('ros/jsk_perception/nodes/sparse_image_encoder.php');
RGD::import('ros/jsk_perception/launch/sparse_image_decoder.php');
