<?php
// file: /tmp/ros_RGD/navigation_experimental/assisted_teleop/launch/assisted_teleop.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/pr2_teleop/nodes/teleop_gripper_right.php');
RGD::import('ros/pr2_teleop/nodes/teleop_gripper_left.php');
RGD::import('ros/pr2_teleop/nodes/pr2_teleop.php');
RGD::import('ros/assisted_teleop/nodes/assisted_teleop.php');
