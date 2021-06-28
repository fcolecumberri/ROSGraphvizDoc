<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/handles.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'test_handles', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('test', 'test_roscpp', 'TestArray')
	->publish_topic('test', 'test_roscpp', 'TestArray')
	->publish_topic('test', 'test_roscpp', 'TestArray')
	->publish_topic('/test', 'test_roscpp', 'TestArray')
	->publish_topic('/test', 'test_roscpp', 'TestArray')
	->publish_topic('/test', 'test_roscpp', 'TestArray')
	->publish_topic('/test', 'test_roscpp', 'TestArray')
	->publish_topic('/test', 'test_roscpp', 'TestArray')
	->publish_topic('/test', 'test_roscpp', 'TestArray')
	->publish_topic('/test', 'test_roscpp', 'TestArray')
	->publish_topic('/test', 'test_roscpp', 'TestArray')
	->publish_topic('/test', 'test_roscpp', 'TestArray')
	->subscribe_topic('test', 'test_roscpp', 'TestArray')
	->subscribe_topic('test', 'test_roscpp', 'TestArray')
	->advertise_service('/test_srv', 'TestStringString', '')
	->advertise_service('/test_srv', 'TestStringString', '')
;