<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_binpack_rect_array.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rostopic/nodes/rect_array_publisher.php');
RGD::import('ros/jsk_perception/nodes/binpack_rect_array.php');
RGD::import('ros/nodelet/nodes/draw_rects.php');
RGD::import('ros/jsk_perception/nodes/tile_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
RGD::import('ros/jsk_perception/launch/sample_image_publisher.php');
