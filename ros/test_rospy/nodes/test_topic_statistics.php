<?php
// file: /tmp/ros_RGD/ros_comm/test/test_rospy/test/rostest/test_topic_statistics.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_rospy', 'test_topic_statistics', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->subscribe_topic('/statistics', 'rosgraph_msgs', 'TopicStatistics')
;