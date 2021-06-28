<?php
// file: /tmp/ros_RGD/ros_comm/tools/topic_tools/test/test_throttle_simtime_loop.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('topic_tools', 'test_throttle_simtime_loop', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('/clock', 'rosgraph_msgs', 'Clock')
	->subscribe_topic('input_throttle', 'std_msgs', 'String')
	->subscribe_topic('input', 'std_msgs', 'String')
;