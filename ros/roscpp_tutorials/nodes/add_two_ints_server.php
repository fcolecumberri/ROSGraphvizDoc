<?php
// file: /tmp/ros_RGD/ros_tutorials/roscpp_tutorials/add_two_ints_server/add_two_ints_server.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('roscpp_tutorials', 'add_two_ints_server', 'https://github.com/ros/ros_tutorials', ProgresState::ros_official)
	->advertise_service('add_two_ints', 'roscpp_tutorials', 'TwoInts')
;