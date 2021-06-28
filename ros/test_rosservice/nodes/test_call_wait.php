<?php
// file: /tmp/ros_RGD/ros_comm/test/test_rosservice/test/check_rosservice_command_line_online.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_rosservice', 'test_call_wait', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->advertise_service('wait_two_ints', '', 'test_rosmaster.srv.AddTwoInts')
;