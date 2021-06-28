<?php
// file: /tmp/ros_RGD/turtlebot3/turtlebot3_slam/launch/turtlebot3_frontier_exploration.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/move_base/nodes/move_base.php');
RGD::import('ros/frontier_exploration/nodes/explore_client.php');
RGD::import('ros/frontier_exploration/nodes/explore_server.php');
RGD::import('ros/turtlebot3_slam/launch/turtlebot3_gmapping.php');
RGD::import('ros/turtlebot3_navigation/launch/amcl.php');
