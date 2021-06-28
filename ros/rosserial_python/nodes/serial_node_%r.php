<?php
// file: /tmp/ros_RGD/rosserial/rosserial_python/src/rosserial_python/SerialClient.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rosserial_python', 'serial_node_%r', 'https://github.com/ros-drivers/rosserial', ProgresState::ros_official)
	->publish_topic('', '', 'self.message')
	->publish_topic('/diagnostics', '', 'diagnostic_msgs.msg.DiagnosticArray')
	->subscribe_topic('', '', 'self.message')
	->advertise_service('', 'rosserial_msgs', 'srv')
	->consume_service('', 'rosserial_msgs', 'srv')
;