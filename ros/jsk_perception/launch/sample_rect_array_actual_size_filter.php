<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_rect_array_actual_size_filter.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/jsk_perception/nodes/selective_search.php');
RGD::import('ros/jsk_perception/nodes/rect_array_actual_size_filter.php');
RGD::import('ros/jsk_perception/nodes/draw_rects.php');
RGD::import('ros/jsk_perception/nodes/draw_rects_filtered.php');
RGD::import('ros/jsk_perception/nodes/binpack_rect_array.php');
RGD::import('ros/rqt_gui/nodes/rqt_gui.php');
