<?php
// file: /tmp/ros_RGD/turtlebot3/turtlebot3_slam/launch/turtlebot3_manipulation_slam.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/robot_state_publisher/nodes/robot_state_publisher.php');
RGD::import('ros/laser_filters/nodes/laser_filter.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/turtlebot3_slam/launch/turtlebot3_$(arg slam_methods).php');
