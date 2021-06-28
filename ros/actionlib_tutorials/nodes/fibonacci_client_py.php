<?php
// file: /tmp/ros_RGD/common_tutorials/actionlib_tutorials/scripts/fibonacci_client.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('actionlib_tutorials', 'fibonacci_client_py', 'https://github.com/ros/common_tutorials', ProgresState::ros_official)
	->consume_action('fibonacci', '', 'actionlib_tutorials.msg.FibonacciAction')
;