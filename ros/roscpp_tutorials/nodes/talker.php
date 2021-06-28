<?php
// file: /tmp/ros_RGD/ros_tutorials/roscpp_tutorials/talker/talker.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('roscpp_tutorials', 'talker', 'https://github.com/ros/ros_tutorials', ProgresState::ros_official)
	->publish_topic('chatter', 'std_msgs', 'String')
;