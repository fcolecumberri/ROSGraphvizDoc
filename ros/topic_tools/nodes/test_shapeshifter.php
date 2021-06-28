<?php
// file: /tmp/ros_RGD/ros_comm/tools/topic_tools/test/test_shapeshifter.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('topic_tools', 'test_shapeshifter', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('loopback', 'std_msgs', 'String')
	->subscribe_topic('input', 'topic_tools', 'ShapeShifter')
	->subscribe_topic('input', 'topic_tools', 'ShapeShifter')
	->subscribe_topic('loopback', 'topic_tools', 'ShapeShifter')
;