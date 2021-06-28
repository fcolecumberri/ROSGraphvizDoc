<?php
// file: /tmp/ros_RGD/rosserial/rosserial_server/src/serial_node.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rosserial_server', 'rosserial_server_serial_node', 'https://github.com/ros-drivers/rosserial', ProgresState::ros_official)
;