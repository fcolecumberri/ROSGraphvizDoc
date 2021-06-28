<?php
// file: /tmp/ros_RGD/geometry_tutorials/turtle_tf2/nodes/turtle_tf2_listener_wait.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('turtle_tf2', 'turtle_tf2_listener_wait', 'https://github.com/ros/geometry_tutorials', ProgresState::ros_official)
	->publish_topic('turtle2/cmd_vel', '', 'geometry_msgs.msg.Twist')
	->consume_service('spawn', '', 'turtlesim.srv.Spawn')
;