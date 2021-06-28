<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_bounding_box_to_rect.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rosbag/nodes/rosbag_play.php');
RGD::import('ros/nodelet/nodes/$(arg MANAGER).php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/bboxes_to_bbox.php');
RGD::import('ros/nodelet/nodes/bbox_to_rect.php');
RGD::import('ros/jsk_perception/nodes/rect_array_to_image_marker.php');
RGD::import('ros/image_view2/nodes/vis_image_with_rect.php');
