<?php
// file: /tmp/ros_RGD/ros_comm/tools/topic_tools/test/test_mux_delete_add.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('topic_tools', 'chatter', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('b', 'std_msgs', 'String')
	->consume_service('mux/add', 'topic_tools', 'MuxAdd')
	->consume_service('mux/delete', 'topic_tools', 'MuxDelete')
	->consume_service('mux/list', 'topic_tools', 'MuxList')
	->consume_service('mux/select', 'topic_tools', 'MuxSelect')
;