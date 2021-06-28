<?php
// file: /tmp/ros_RGD/ros_comm/test/test_rospy/test/rostest/test_deregister.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_rospy', 'test_dereg', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('', 'std_msgs', 'String')
	->subscribe_topic('', 'std_msgs', 'String')
	->advertise_service('', 'test_rospy', 'EmptySrv')
;