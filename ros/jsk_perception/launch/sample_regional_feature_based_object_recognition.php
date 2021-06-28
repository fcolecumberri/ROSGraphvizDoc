<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_regional_feature_based_object_recognition.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/regional_feature_based_object_recognition.php');
RGD::import('ros/jsk_perception/nodes/draw_classification_result.php');
RGD::import('ros/jsk_perception/nodes/tile_images.php');
RGD::import('ros/image_view/nodes/image_view.php');
RGD::import('ros/jsk_perception/launch/play_rosbag_apc2016_object_imgs_and_masks.php');
