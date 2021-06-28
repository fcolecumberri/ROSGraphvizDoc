<?php
// file: /tmp/ros_RGD/ros_controllers/ackermann_steering_controller/test/common/launch/view_ackermann_steering_bot.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/ackermann_steering_controller/nodes/ackermann_steering_controller_ackermann_steering_bot.php');
RGD::import('ros/controller_manager/nodes/controller_spawner.php');
RGD::import('ros/gazebo_ros/nodes/urdf_spawner.php');
RGD::import('ros/joint_state_publisher/nodes/joint_state_publisher.php');
RGD::import('ros/robot_state_publisher/nodes/robot_state_publisher.php');
RGD::import('ros/rviz/nodes/rviz.php');
RGD::import('ros/gazebo_ros/launch/empty_world.php');
