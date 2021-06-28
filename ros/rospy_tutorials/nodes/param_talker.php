<?php
// file: /tmp/ros_RGD/ros_tutorials/rospy_tutorials/006_parameters/param_talker.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rospy_tutorials', 'param_talker', 'https://github.com/ros/ros_tutorials', ProgresState::ros_official)
	->publish_topic('', 'std_msgs', 'String')
;