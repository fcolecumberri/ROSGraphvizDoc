<?php
// file: /tmp/ros_RGD/geometry_tutorials/turtle_tf2/launch/turtle_tf2_demo_cpp.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/turtlesim/nodes/sim.php');
RGD::import('ros/turtlesim/nodes/teleop.php');
RGD::import('ros/turtle_tf2/nodes/turtle1_tf2_broadcaster.php');
RGD::import('ros/turtle_tf2/nodes/turtle2_tf2_broadcaster.php');
RGD::import('ros/turtle_tf2/nodes/turtle_pointer.php');
