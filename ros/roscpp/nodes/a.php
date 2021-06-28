<?php
// file: /tmp/ros_RGD/ros_comm/clients/roscpp/include/ros/node_handle.h
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('roscpp', '/a', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('my_topic', 'std_msgs', 'Empty')
	->publish_topic('my_topic', 'std_msgs', 'Empty')
	->publish_topic('my_topic', 'std_msgs', 'Empty')
	->publish_topic('my_topic', 'std_msgs', 'Empty')
	->subscribe_topic('my_topic', 'std_msgs', 'Empty')
	->subscribe_topic('my_topic', 'std_msgs', 'Empty')
	->subscribe_topic('my_topic', 'std_msgs', 'Empty')
	->subscribe_topic('my_topic', 'std_msgs', 'Empty')
	->subscribe_topic('my_topic', 'std_msgs', 'Empty')
	->subscribe_topic('my_topic', 'std_msgs', 'Empty')
;