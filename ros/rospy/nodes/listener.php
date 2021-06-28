<?php
// file: /tmp/ros_RGD/ros_comm/clients/rospy/test_nodes/listener.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rospy', 'listener', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->subscribe_topic('chatter', 'std_msgs', 'String')
;