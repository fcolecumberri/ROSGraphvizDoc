<?php
// file: /tmp/ros_RGD/gazebo_ros_pkgs/gazebo_plugins/test/pub_joint_trajectory_test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('gazebo_plugins', 'pub_joint_trajectory_test', 'https://github.com/ros-simulation/gazebo_ros_pkgs', ProgresState::ros_official)
	->publish_topic('set_joint_trajectory', 'trajectory_msgs', 'JointTrajectory')
	->consume_service('set_joint_trajectory', 'gazebo_msgs', 'SetJointTrajectory')
;