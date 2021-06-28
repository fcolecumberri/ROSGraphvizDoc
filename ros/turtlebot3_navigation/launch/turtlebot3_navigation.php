<?php
// file: /tmp/ros_RGD/turtlebot3/turtlebot3_navigation/launch/turtlebot3_navigation.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/map_server/nodes/map_server.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/turtlebot3_bringup/launch/turtlebot3_remote.php');
RGD::import('ros/turtlebot3_navigation/launch/amcl.php');
RGD::import('ros/turtlebot3_navigation/launch/move_base.php');
