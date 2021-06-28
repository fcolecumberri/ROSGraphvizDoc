<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/service_adv_unadv.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'service_adv_unadv', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->advertise_service('service_adv', 'test_roscpp', 'TestStringString')
;