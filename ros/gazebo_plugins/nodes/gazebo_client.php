<?php
// file: /tmp/ros_RGD/gazebo_ros_pkgs/gazebo_plugins/src/gazebo_ros_video.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('gazebo_plugins', 'gazebo_client', 'https://github.com/ros-simulation/gazebo_ros_pkgs', ProgresState::ros_official)
;