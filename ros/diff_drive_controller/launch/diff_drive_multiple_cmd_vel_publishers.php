<?php
// file: /tmp/ros_RGD/ros_controllers/diff_drive_controller/test/diff_drive_multiple_cmd_vel_publishers.test
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/rostopic/nodes/cmd_vel_publisher.php');
RGD::import('ros/rostopic/nodes/cmd_vel_publisher2.php');
RGD::import('ros/diff_drive_controller/launch/diff_drive_common.php');
