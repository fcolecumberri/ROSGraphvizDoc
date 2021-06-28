<?php
// file: /tmp/ros_RGD/ros_comm/tools/topic_tools/test/test_one_message.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('topic_tools', 'random_sub', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->subscribe_topic('output', '', 'String')
;