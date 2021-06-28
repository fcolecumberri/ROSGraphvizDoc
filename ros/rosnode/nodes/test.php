<?php
// file: /tmp/ros_RGD/ros_comm/tools/rosnode/test/check_rosnode_command_online.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rosnode', 'test', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->subscribe_topic('', '', 'std_msgs.msg.String')
;