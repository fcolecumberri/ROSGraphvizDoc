<?php
// file: /tmp/ros_RGD/gazebo_ros_pkgs/gazebo_plugins/test/camera/depth_camera.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('gazebo_plugins', 'gazebo_depth_camera_test', 'https://github.com/ros-simulation/gazebo_ros_pkgs', ProgresState::ros_official)
;