<?php
// file: /tmp/ros_RGD/jsk_recognition/resized_image_transport/launch/sample_image_resizer.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_recognition_utils/nodes/virtual_camera.php');
RGD::import('ros/resized_image_transport/nodes/image_resizer_w_camera_info.php');
RGD::import('ros/resized_image_transport/nodes/image_resizer_wo_camera_info.php');
RGD::import('ros/image_view/nodes/image_view0.php');
RGD::import('ros/image_view/nodes/image_view1.php');
RGD::import('ros/image_view/nodes/image_view2.php');
