<?php
// file: /tmp/ros_RGD/ros_comm/test/test_rosbag/test/latched_pub.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_rosbag', 'latched_pub', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('chatter', '', 'String')
;