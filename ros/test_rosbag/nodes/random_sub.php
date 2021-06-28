<?php
// file: /tmp/ros_RGD/ros_comm/test/test_rosbag/bag_migration_tests/test/random_play.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_rosbag', 'random_sub', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->subscribe_topic('', '', 'msg_class')
;