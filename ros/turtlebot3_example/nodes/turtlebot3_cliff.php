<?php
// file: /tmp/ros_RGD/turtlebot3/turtlebot3_example/nodes/turtlebot3_cliff
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('turtlebot3_example', 'turtlebot3_cliff', 'https://github.com/ROBOTIS-GIT/turtlebot3', ProgresState::ros_official)
	->publish_topic('cmd_vel', 'geometry_msgs', 'Twist')
	->subscribe_topic('sensor_state', 'turtlebot3_msgs', 'SensorState')
;