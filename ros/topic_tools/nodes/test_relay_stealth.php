<?php
// file: /tmp/ros_RGD/ros_comm/tools/topic_tools/test/test_relay_stealth.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('topic_tools', 'test_relay_stealth', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->subscribe_topic('/relay_stealth/output', 'std_msgs', 'String')
	->subscribe_topic('/original_topic/relay', 'std_msgs', 'String')
;