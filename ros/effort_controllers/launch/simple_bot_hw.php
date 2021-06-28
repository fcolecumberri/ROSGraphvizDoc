<?php
// file: /tmp/ros_RGD/ros_controllers/effort_controllers/test/simple_bot_hw.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/effort_controllers/nodes/simple_bot_hw.php');
RGD::import('ros/controller_manager/nodes/controller_spawner.php');
RGD::import('ros/robot_state_publisher/nodes/robot_state_publisher.php');
