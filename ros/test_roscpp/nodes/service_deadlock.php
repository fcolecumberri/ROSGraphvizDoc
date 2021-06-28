<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/service_deadlock.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'service_deadlock', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->advertise_service('SERVICE1', 'std_srvs', 'Empty')
	->consume_service('SERVICE1', 'std_srvs', 'Empty')
;