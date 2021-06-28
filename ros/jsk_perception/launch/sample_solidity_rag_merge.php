<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_solidity_rag_merge.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/jsk_perception/nodes/mask_image_generator.php');
RGD::import('ros/jsk_perception/nodes/solidity_rag_merge.php');
RGD::import('ros/jsk_perception/nodes/colorize_labels_slic.php');
RGD::import('ros/jsk_perception/nodes/colorize_labels_merged.php');
RGD::import('ros/jsk_perception/nodes/tile_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
