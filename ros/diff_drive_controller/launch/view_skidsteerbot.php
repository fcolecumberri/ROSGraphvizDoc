<?php
// file: /tmp/ros_RGD/ros_controllers/diff_drive_controller/test/view_skidsteerbot.launch
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/diff_drive_controller/nodes/skidsteerbot.php');
RGD::import('ros/controller_manager/nodes/controller_spawner.php');
RGD::import('ros/gazebo/nodes/spawn_single_link.php');
RGD::import('ros/gazebo_worlds/launch/empty_world.php');
