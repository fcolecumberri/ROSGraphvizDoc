<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/launch/background_subtraction.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/nodelet/nodes/$(arg manager).php');
RGD::import('ros/nodelet/nodes/bg_substract.php');
