<?php
// file: /tmp/ros_RGD/geometry_tutorials/turtle_tf/src/turtle_tf_listener.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('turtle_tf', 'my_tf_listener', 'https://github.com/ros/geometry_tutorials', ProgresState::ros_official)
	->publish_topic('turtle2/cmd_vel', 'geometry_msgs', 'Twist')
	->consume_service('spawn', 'turtlesim', 'Spawn')
;