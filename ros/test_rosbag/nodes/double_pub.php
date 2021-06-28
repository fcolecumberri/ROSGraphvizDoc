<?php
// file: /tmp/ros_RGD/ros_comm/test/test_rosbag/test/double_pub.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_rosbag', 'double_pub', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('chatter', 'std_msgs', 'String')
	->publish_topic('rettahc', 'std_msgs', 'String')
;