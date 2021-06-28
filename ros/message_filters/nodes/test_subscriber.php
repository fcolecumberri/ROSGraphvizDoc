<?php
// file: /tmp/ros_RGD/ros_comm/utilities/message_filters/test/test_subscriber.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('message_filters', 'test_subscriber', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('test_topic', '', '')
	->publish_topic('test_topic', '', '')
	->publish_topic('test_topic', '', '')
	->publish_topic('test_topic', '', '')
	->publish_topic('test_topic', '', '')
	->publish_topic('test_topic', '', '')
;