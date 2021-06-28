<?php
// file: /tmp/ros_RGD/turtlebot3/turtlebot3_slam/launch/turtlebot3_slam.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/turtlebot3_bringup/launch/turtlebot3_remote.php');
RGD::import('ros/turtlebot3_slam/launch/turtlebot3_$(arg slam_methods).php');
