<?php
// file: /tmp/ros_RGD/geometry_tutorials/turtle_tf/nodes/turtle_tf_broadcaster.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('turtle_tf', 'turtle_tf_broadcaster', 'https://github.com/ros/geometry_tutorials', ProgresState::ros_official)
	->subscribe_topic('/%s/pose', '', 'turtlesim.msg.Pose')
;