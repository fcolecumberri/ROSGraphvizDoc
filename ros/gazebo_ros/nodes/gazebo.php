<?php
// file: /tmp/ros_RGD/gazebo_ros_pkgs/gazebo_ros/src/gazebo_ros_api_plugin.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('gazebo_ros', 'gazebo', 'https://github.com/ros-simulation/gazebo_ros_pkgs', ProgresState::ros_official)
;