<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/service_adv_zombie.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'dying_node', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->advertise_service('phantom_service', 'test_roscpp', 'TestStringString')
;