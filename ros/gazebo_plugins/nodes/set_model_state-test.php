<?php
// file: /tmp/ros_RGD/gazebo_ros_pkgs/gazebo_plugins/test/set_model_state_test/set_model_state_test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('gazebo_plugins', 'set_model_state-test', 'https://github.com/ros-simulation/gazebo_ros_pkgs', ProgresState::ros_official)
	->publish_topic('/gazebo/set_model_state', 'gazebo_msgs', 'ModelState')
;