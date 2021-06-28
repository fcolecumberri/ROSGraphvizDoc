<?php
// file: /tmp/ros_RGD/ros_comm/test/test_rospy/test/rostest/test_service_order.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_rospy', 'service_before', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->advertise_service('', '', 'EmptyReqSrv')
	->advertise_service('', '', 'EmptyReqSrv')
	->consume_service('', 'test_rospy', 'srv')
;