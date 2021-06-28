<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/sample_speak_when_label_found.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/speak_when_label_found.php');
RGD::import('ros/rostopic/nodes/rostopic_echo.php');
RGD::import('ros/jsk_perception/launch/sample_label_image_decomposer.php');
