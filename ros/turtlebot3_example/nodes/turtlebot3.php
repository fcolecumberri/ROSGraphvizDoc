<?php
// file: /tmp/ros_RGD/turtlebot3/turtlebot3_example/nodes/turtlebot3_server
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('turtlebot3_example', 'turtlebot3', 'https://github.com/ROBOTIS-GIT/turtlebot3', ProgresState::ros_official)
	->publish_topic('cmd_vel', 'geometry_msgs', 'Twist')
	->subscribe_topic('joint_states', 'sensor_msgs', 'JointState')
	->subscribe_topic('odom', 'nav_msgs', 'Odometry')
	->advertise_action('', '', 'turtlebot3_example.msg.Turtlebot3Action')
;