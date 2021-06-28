<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_image_time_diff.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rostopic/nodes/start_trigger_publisher.php');
RGD::import('ros/nodelet/nodes/hsv_decomposer.php');
RGD::import('ros/jsk_perception/nodes/image_time_diff.php');
RGD::import('ros/jsk_perception/nodes/tile_image.php');
RGD::import('ros/image_view/nodes/image_view.php');
RGD::import('ros/jsk_perception/launch/play_rosbag_people.php');
