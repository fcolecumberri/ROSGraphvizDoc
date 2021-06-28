<?php
// file: /tmp/ros_RGD/geometry_tutorials/turtle_tf2/nodes/turtle_tf2_listener.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('turtle_tf2', 'turtle_tf2_listener', 'https://github.com/ros/geometry_tutorials', ProgresState::ros_official)
	->publish_topic('%s/cmd_vel', '', 'geometry_msgs.msg.Twist')
	->consume_service('spawn', '', 'turtlesim.srv.Spawn')
;