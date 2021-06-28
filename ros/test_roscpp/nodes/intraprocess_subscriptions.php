<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/intraprocess_subscriptions.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'intraprocess_subscriptions', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('test', '', '')
	->publish_topic('test', '', '')
	->publish_topic('test', '', '')
;