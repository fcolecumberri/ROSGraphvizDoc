<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/launch/color_histogram_label_match_sample.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/uvc_camera/nodes/camera.php');
RGD::import('ros/image_view2/nodes/image_view2.php');
RGD::import('ros/jsk_perception/nodes/super_pixels.php');
RGD::import('ros/image_view/nodes/super_pixels_view.php');
RGD::import('ros/jsk_perception/nodes/hsv_decomposer.php');
RGD::import('ros/jsk_perception/nodes/rect_to_mask_image.php');
RGD::import('ros/jsk_perception/nodes/reference_hue_histogram.php');
RGD::import('ros/image_view/nodes/mask_view.php');
RGD::import('ros/jsk_perception/nodes/color_histogram_label_match.php');
RGD::import('ros/image_view/nodes/coef_view.php');
RGD::import('ros/image_view/nodes/region_view.php');
