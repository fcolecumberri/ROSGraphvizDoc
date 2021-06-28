<?php
// file: /tmp/ros_RGD/ros_comm/test/test_rospy/test/rostest/test_rospy_client_online.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_rospy', 'test_rospy_online', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->consume_service('add_two_ints', '', 'test_rosmaster.srv.AddTwoInts')
	->consume_service('fake_service', '', 'test_rosmaster.srv.AddTwoInts')
	->consume_service('add_two_ints', '', 'test_rosmaster.srv.AddTwoInts')
	->consume_service('fake_service', '', 'test_rosmaster.srv.AddTwoInts')
;