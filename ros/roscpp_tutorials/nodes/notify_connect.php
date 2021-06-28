<?php
// file: /tmp/ros_RGD/ros_tutorials/roscpp_tutorials/notify_connect/notify_connect.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('roscpp_tutorials', 'notify_connect', 'https://github.com/ros/ros_tutorials', ProgresState::ros_official)
	->publish_topic('chatter', 'std_msgs', 'String')
;