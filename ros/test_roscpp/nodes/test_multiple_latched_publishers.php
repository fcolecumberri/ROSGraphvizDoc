<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/multiple_latched_publishers.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'test_multiple_latched_publishers', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('foo', '', '')
	->publish_topic('foo', '', '')
	->publish_topic('bar', '', '')
	->publish_topic('baz', '', '')
	->publish_topic('qux', '', '')
	->publish_topic('qux', '', '')
;