<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/launch/point_pose_extractor_sample.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/uvc_camera/nodes/uvc_camera.php');
RGD::import('ros/image_proc/nodes/image_proc.php');
RGD::import('ros/imagesift/nodes/imagefeature.php');
RGD::import('ros/jsk_perception/nodes/point_pose_extractor.php');
