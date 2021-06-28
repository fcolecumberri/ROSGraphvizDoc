<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/service_exception.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'service_exception', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->advertise_service('SERVICE', 'std_srvs', 'Empty')
	->consume_service('SERVICE', 'std_srvs', 'Empty')
;