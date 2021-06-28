<?php
// file: /tmp/ros_RGD/ros_comm/test/test_rospy/nodes/listenerpublisher.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_rospy', 'listenerpublisher', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('listenerpublisher', '', 'String')
	->subscribe_topic('chatter', '', 'String')
;