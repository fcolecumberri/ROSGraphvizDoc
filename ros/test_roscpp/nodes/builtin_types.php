<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test_serialization/src/builtin_types.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'builtin_types', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('test_bool', '', '')
	->publish_topic('test_double', '', '')
	->publish_topic('test_float', '', '')
	->publish_topic('test_int16', '', '')
	->publish_topic('test_int32', '', '')
	->publish_topic('test_int64', '', '')
	->publish_topic('test_int8', '', '')
	->publish_topic('test_string', 'std', 'string')
	->publish_topic('test_uint16', '', '')
	->publish_topic('test_uint32', '', '')
	->publish_topic('test_uint64', '', '')
	->publish_topic('test_uint8', '', '')
;