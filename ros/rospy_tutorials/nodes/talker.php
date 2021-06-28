<?php
// file: /tmp/ros_RGD/ros_tutorials/rospy_tutorials/001_talker_listener/talker
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rospy_tutorials', 'talker', 'https://github.com/ros/ros_tutorials', ProgresState::ros_official)
	->publish_topic('chatter', 'std_msgs', 'String')
;