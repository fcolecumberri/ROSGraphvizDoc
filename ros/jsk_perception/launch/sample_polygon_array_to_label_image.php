<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_polygon_array_to_label_image.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/tf/nodes/static_tf_publisher_map_to_camera.php');
RGD::import('ros/jsk_recognition_utils/nodes/polygon_array_publisher.php');
RGD::import('ros/rostopic/nodes/camera_info_publisher.php');
RGD::import('ros/nodelet/nodes/polygon_array_to_label_image.php');
RGD::import('ros/jsk_perception/nodes/label_image_decomposer.php');
RGD::import('ros/rviz/nodes/rviz.php');
