<?php
// file: /tmp/ros_RGD/ros_comm/tools/roslaunch/test_nodes/talker.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('roslaunch', 'talker', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('chatter', 'std_msgs', 'String')
;