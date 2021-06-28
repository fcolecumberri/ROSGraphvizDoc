<?php
// file: /tmp/ros_RGD/ros_controllers/joint_trajectory_controller/test/joint_trajectory_controller_test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('joint_trajectory_controller', 'joint_trajectory_controller_test', 'https://github.com/ros-controls/ros_controllers', ProgresState::ros_official)
	->publish_topic('smoothing', 'std_msgs', 'Float64')
	->publish_topic('smoothings', 'std_msgs', 'Float64MultiArray')
	->publish_topic('delay', 'std_msgs', 'Bool')
	->publish_topic('upper_bound', 'std_msgs', 'Float64')
	->publish_topic('command', 'trajectory_msgs', 'JointTrajectory')
	->consume_service('query_state', 'control_msgs', 'QueryTrajectoryState')
	->consume_service('/controller_manager/load_controller', '', '')
	->consume_service('/controller_manager/unload_controller', '', '')
	->consume_service('/controller_manager/switch_controller', '', '')
;