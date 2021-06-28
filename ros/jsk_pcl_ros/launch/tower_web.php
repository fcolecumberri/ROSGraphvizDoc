<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/tower_detect/tower_web.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/mjpeg_server/nodes/mjpeg_server.php');
RGD::import('ros/roswww/nodes/roswww.php');
RGD::import('ros/jsk_pcl_ros/nodes/tower_detect_viewer_server.php');
RGD::import('ros/image_view2/nodes/image_view2.php');
RGD::import('ros/rosbridge_server/launch/rosbridge_websocket.php');
