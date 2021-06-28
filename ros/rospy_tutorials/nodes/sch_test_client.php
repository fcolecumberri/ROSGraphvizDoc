<?php
// file: /tmp/ros_RGD/ros_tutorials/rospy_tutorials/test/test_client_connection_header.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rospy_tutorials', 'sch_test_client', 'https://github.com/ros/ros_tutorials', ProgresState::ros_official)
	->consume_service('add_two_ints', 'rospy_tutorials', 'AddTwoInts')
	->consume_service('', 'rospy_tutorials', 'AddTwoInts')
;