<?php
// file: /tmp/ros_RGD/rosserial/rosserial_mbed/src/examples/ServiceClient/client.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rosserial_mbed', 'service_client_test', 'https://github.com/ros-drivers/rosserial', ProgresState::ros_official)
	->advertise_service('test_srv', '', 'Test')
;