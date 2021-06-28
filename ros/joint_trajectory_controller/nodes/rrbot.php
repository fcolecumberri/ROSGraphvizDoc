<?php
// file: /tmp/ros_RGD/ros_controllers/joint_trajectory_controller/test/rrbot.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('joint_trajectory_controller', 'rrbot', 'https://github.com/ros-controls/ros_controllers', ProgresState::ros_official)
	->publish_topic('parameter_updated', 'std_msgs', 'Empty')
;