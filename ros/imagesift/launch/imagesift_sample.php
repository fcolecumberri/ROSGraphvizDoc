<?php
// file: /tmp/ros_RGD/jsk_recognition/imagesift/sample/imagesift_sample.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_recognition_utils/nodes/static_virtual_camera.php');
RGD::import('ros/nodelet/nodes/nodelet_manager.php');
RGD::import('ros/nodelet/nodes/imagesift.php');
RGD::import('ros/image_view/nodes/image_view.php');
RGD::import('ros/posedetection_msgs/nodes/feature0d_to_image.php');
RGD::import('ros/image_view/nodes/imagefeature0d_view.php');
