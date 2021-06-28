<?php
// file: /tmp/ros_RGD/gazebo_ros_pkgs/gazebo_ros/scripts/spawn_model
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('gazebo_ros', 'spawn_model', 'https://github.com/ros-simulation/gazebo_ros_pkgs', ProgresState::ros_official)
;