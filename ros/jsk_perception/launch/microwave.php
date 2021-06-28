<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/microwave.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/topic_tools/nodes/throttle.php');
RGD::import('ros/imagesift/nodes/sift.php');
RGD::import('ros/image_view/nodes/image_vieww.php');
RGD::import('ros/jsk_perception/nodes/microwave_range.php');
