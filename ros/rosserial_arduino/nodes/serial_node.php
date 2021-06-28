<?php
// file: /tmp/ros_RGD/rosserial/rosserial_arduino/nodes/serial_node.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rosserial_arduino', 'serial_node', 'https://github.com/ros-drivers/rosserial', ProgresState::ros_official)
;