<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_deep_sort_tracker.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/image_publisher.php');
RGD::import('ros/jsk_perception/nodes/ssd_object_detector.php');
RGD::import('ros/jsk_perception/nodes/deep_sort_tracker.php');
RGD::import('ros/image_view/nodes/image_view.php');
