<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_ssd_hand_detector.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/ssd_object_detector.php');
RGD::import('ros/image_view/nodes/image_view.php');
RGD::import('ros/jsk_perception/launch/play_rosbag_people.php');
