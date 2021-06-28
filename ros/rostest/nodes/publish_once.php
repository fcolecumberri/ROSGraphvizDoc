<?php
// file: /tmp/ros_RGD/ros_comm/tools/rostest/test_nodes/publish_once.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rostest', 'publish_once', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('once_topic', 'std_msgs', 'Bool')
;