<?php
// file: /tmp/ros_RGD/ros_tutorials/roscpp_tutorials/anonymous_listener/anonymous_listener.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('roscpp_tutorials', 'listener', 'https://github.com/ros/ros_tutorials', ProgresState::ros_official)
	->subscribe_topic('chatter', 'std_msgs', 'String')
;