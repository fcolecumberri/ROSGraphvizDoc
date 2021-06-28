<?php
// file: /tmp/ros_RGD/ros_comm/tools/topic_tools/test/switch_mux.test
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rostopic/nodes/rostopic_pub1.php');
RGD::import('ros/rostopic/nodes/rostopic_pub2.php');
RGD::import('ros/topic_tools/nodes/mux_explicit.php');
RGD::import('ros/topic_tools/nodes/mux_select.php');
