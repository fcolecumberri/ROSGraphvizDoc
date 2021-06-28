<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/random_forest_sample.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/jsk_perception/nodes/random_forest_server.php');
RGD::import('ros/jsk_perception/nodes/random_forest_client.php');
RGD::import('ros/image_view/nodes/image_view_random_forest_output.php');
