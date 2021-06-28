<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/service_call.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'service_call', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->consume_service('service_adv', 'test_roscpp', 'TestStringString')
	->consume_service('service_adv', 'test_roscpp', 'TestStringString')
	->consume_service('service_adv', 'test_roscpp', 'TestStringString')
	->consume_service('migowiowejowieuhwejg', 'test_roscpp', 'TestStringString')
;