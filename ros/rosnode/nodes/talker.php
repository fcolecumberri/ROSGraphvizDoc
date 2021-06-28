<?php
// file: /tmp/ros_RGD/ros_comm/tools/rosnode/test_nodes/talker.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rosnode', 'talker', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('chatter', 'std_msgs', 'String')
;