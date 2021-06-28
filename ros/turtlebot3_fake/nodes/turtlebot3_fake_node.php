<?php
// file: /tmp/ros_RGD/turtlebot3_simulations/turtlebot3_fake/src/turtlebot3_fake.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('turtlebot3_fake', 'turtlebot3_fake_node', 'https://github.com/ROBOTIS-GIT/turtlebot3_simulations', ProgresState::ros_official)
	->publish_topic('joint_states', 'sensor_msgs', 'JointState')
	->publish_topic('odom', 'nav_msgs', 'Odometry')
;