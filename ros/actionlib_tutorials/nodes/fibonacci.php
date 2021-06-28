<?php
// file: /tmp/ros_RGD/common_tutorials/actionlib_tutorials/scripts/fibonacci_server.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('actionlib_tutorials', 'fibonacci', 'https://github.com/ros/common_tutorials', ProgresState::ros_official)
	->advertise_action('', '', 'actionlib_tutorials.msg.FibonacciAction')
;