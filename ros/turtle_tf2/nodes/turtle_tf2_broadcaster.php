<?php
// file: /tmp/ros_RGD/geometry_tutorials/turtle_tf2/nodes/turtle_tf2_broadcaster.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('turtle_tf2', 'turtle_tf2_broadcaster', 'https://github.com/ros/geometry_tutorials', ProgresState::ros_official)
	->subscribe_topic('/%s/pose', '', 'turtlesim.msg.Pose')
;