<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_recognition_utils/sample/sample_add_cluster_indices.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rostopic/nodes/cluster_indices_publisher0.php');
RGD::import('ros/rostopic/nodes/cluster_indices_publisher1.php');
RGD::import('ros/jsk_recognition_utils/nodes/add_cluster_indices.php');
