<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/service_callback_types.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'subscription_callback_types', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->advertise_service('add_two_ints', 'test_roscpp', 'TestStringString')
	->advertise_service('add_two_ints', 'test_roscpp', 'TestStringString')
;