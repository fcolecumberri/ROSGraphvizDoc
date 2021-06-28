<?php
// file: /tmp/ros_RGD/ros_comm/test/test_rospy/test/rostest/fake_time.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_rospy', 'fake_time', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('/clock', 'rosgraph_msgs', 'Clock')
;