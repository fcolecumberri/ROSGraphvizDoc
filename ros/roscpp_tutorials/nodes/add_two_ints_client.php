<?php
// file: /tmp/ros_RGD/ros_tutorials/roscpp_tutorials/add_two_ints_client/add_two_ints_client.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('roscpp_tutorials', 'add_two_ints_client', 'https://github.com/ros/ros_tutorials', ProgresState::ros_official)
	->consume_service('add_two_ints', 'roscpp_tutorials', 'TwoInts')
;