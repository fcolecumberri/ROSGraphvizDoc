<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_extract_image_channel.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/jsk_perception/nodes/extract_image_channel_r.php');
RGD::import('ros/jsk_perception/nodes/extract_image_channel_g.php');
RGD::import('ros/jsk_perception/nodes/extract_image_channel_b.php');
RGD::import('ros/rqt_gui/nodes/rqt_gui.php');
