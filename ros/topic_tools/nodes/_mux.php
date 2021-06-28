<?php
// file: /tmp/ros_RGD/ros_comm/tools/topic_tools/src/mux.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('topic_tools', '_mux', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('selected', 'std_msgs', 'String')
	->advertise_service('_select', 'topic_tools', 'MuxSelect')
	->advertise_service('_select', 'topic_tools', 'MuxSelect')
	->advertise_service('list', 'topic_tools', 'MuxList')
	->advertise_service('add', 'topic_tools', 'MuxAdd')
	->advertise_service('delete', 'topic_tools', 'MuxDelete')
;