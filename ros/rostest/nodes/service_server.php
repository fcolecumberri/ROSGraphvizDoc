<?php
// file: /tmp/ros_RGD/ros_comm/tools/rostest/test_nodes/service_server.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rostest', 'service_server', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->advertise_service('empty', 'std_srvs', 'Empty')
	->advertise_service('set_bool', 'std_srvs', 'SetBool')
	->advertise_service('trigger', 'std_srvs', 'Trigger')
;