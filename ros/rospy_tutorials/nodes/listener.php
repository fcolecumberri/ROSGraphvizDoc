<?php
// file: /tmp/ros_RGD/ros_tutorials/rospy_tutorials/001_talker_listener/listener
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rospy_tutorials', 'listener', 'https://github.com/ros/ros_tutorials', ProgresState::ros_official)
	->subscribe_topic('chatter', 'std_msgs', 'String')
;