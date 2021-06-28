<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_kinfu.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_recognition_utils/nodes/bounding_box_array_publisher.php');
RGD::import('ros/jsk_pcl_ros_utils/nodes/bbox_array_to_bbox.php');
RGD::import('ros/jsk_recognition_msgs/nodes/save_mesh_server.php');
RGD::import('ros/jsk_rviz_plugins/nodes/rosconsole_overlay_text.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/nodelet/nodes/kinfu.php');
RGD::import('ros/jsk_pcl_ros/launch/play_rosbag_room73b2_table.php');
