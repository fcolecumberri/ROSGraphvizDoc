<?php
// file: /tmp/ros_RGD/rosserial/rosserial_arduino/src/ros_lib/examples/ServiceClient/client.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rosserial_arduino', 'service_client_test', 'https://github.com/ros-drivers/rosserial', ProgresState::ros_official)
	->advertise_service('test_srv', '', 'Test')
;