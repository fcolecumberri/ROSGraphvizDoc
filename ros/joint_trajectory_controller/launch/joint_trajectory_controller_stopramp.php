<?php
// file: /tmp/ros_RGD/ros_controllers/joint_trajectory_controller/test/joint_trajectory_controller_stopramp.test
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::import('ros/joint_trajectory_controller/nodes/rrbot.php');
RGD::import('ros/controller_manager/nodes/controller_spawner.php');
RGD::import('ros/rqt_plot/nodes/rrbot_pos_monitor.php');
RGD::import('ros/rqt_plot/nodes/rrbot_vel_monitor.php');
