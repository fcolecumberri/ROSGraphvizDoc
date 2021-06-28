<?php
// file: /tmp/ros_RGD/ros_controllers/four_wheel_steering_controller/test/launch/view_four_wheel_steering.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/four_wheel_steering_controller/nodes/four_wheel_steering.php');
RGD::import('ros/robot_state_publisher/nodes/robot_state_publisher.php');
RGD::import('ros/gazebo_ros/nodes/spawn_four_wheel_steering.php');
RGD::import('ros/controller_manager/nodes/controller_spawner.php');
RGD::import('ros/joy/nodes/joy_node.php');
RGD::import('ros/teleop_twist_joy/nodes/teleop_twist_joy.php');
