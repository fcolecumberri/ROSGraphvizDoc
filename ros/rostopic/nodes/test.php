<?php
// file: /tmp/ros_RGD/ros_comm/tools/rostopic/test/check_rostopic_command_line_online.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rostopic', 'test', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->subscribe_topic('', '', 'std_msgs.msg.String')
	->subscribe_topic('', '', 'std_msgs.msg.String')
	->subscribe_topic('', '', 'std_msgs.msg.String')
;