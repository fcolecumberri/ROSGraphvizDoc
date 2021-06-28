<?php
// file: /tmp/ros_RGD/rosserial/rosserial_embeddedlinux/src/examples/ExampleServiceClient/exampleService.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rosserial_embeddedlinux', 'service_client_test', 'https://github.com/ros-drivers/rosserial', ProgresState::ros_official)
	->advertise_service('test_srv', '', 'Test')
;