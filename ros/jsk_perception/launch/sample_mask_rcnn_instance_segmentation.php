<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_mask_rcnn_instance_segmentation.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/jsk_perception/nodes/image_cluster_indices_decomposer.php');
RGD::import('ros/jsk_perception/nodes/label_cls_to_mask.php');
RGD::import('ros/jsk_perception/nodes/apply_mask_image.php');
RGD::import('ros/jsk_perception/nodes/label_image_decomposer.php');
RGD::import('ros/jsk_perception/nodes/tile_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
RGD::import('ros/jsk_perception/launch/mask_rcnn_instance_segmentation.php');
