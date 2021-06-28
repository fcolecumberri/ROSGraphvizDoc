<?php
// file: /tmp/ros_RGD/turtlebot3/turtlebot3_slam/launch/turtlebot3_cartographer.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/cartographer_ros/nodes/cartographer_node.php');
RGD::import('ros/cartographer_ros/nodes/cartographer_occupancy_grid_node.php');
RGD::import('ros/turtlebot3_slam/nodes/flat_world_imu_node.php');
RGD::import('ros/turtlebot3_navigation/launch/move_base.php');
