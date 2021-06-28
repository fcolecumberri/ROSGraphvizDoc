<?php
// file: /tmp/ros_RGD/geometry_tutorials/turtle_tf/launch/turtle_tf_demo.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/turtlesim/nodes/sim.php');
RGD::import('ros/turtlesim/nodes/teleop.php');
RGD::import('ros/turtle_tf/nodes/turtle1_tf_broadcaster.php');
RGD::import('ros/turtle_tf/nodes/turtle2_tf_broadcaster.php');
RGD::import('ros/turtle_tf/nodes/turtle_pointer.php');
