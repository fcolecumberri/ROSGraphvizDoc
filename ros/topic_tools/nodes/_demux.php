<?php
// file: /tmp/ros_RGD/ros_comm/tools/topic_tools/src/demux.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('topic_tools', '_demux', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('selected', 'std_msgs', 'String')
	->advertise_service('select', 'topic_tools', 'DemuxSelect')
	->advertise_service('list', 'topic_tools', 'DemuxList')
	->advertise_service('add', 'topic_tools', 'DemuxAdd')
	->advertise_service('delete', 'topic_tools', 'DemuxDelete')
;