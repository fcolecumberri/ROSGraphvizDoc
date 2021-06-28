<?php
// file: /tmp/ros_RGD/ros_comm/test/test_rospy/nodes/listener.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_rospy', 'listener', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->subscribe_topic('chatter', 'std_msgs', 'String')
;