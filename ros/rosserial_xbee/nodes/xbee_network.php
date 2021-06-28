<?php
// file: /tmp/ros_RGD/rosserial/rosserial_xbee/scripts/xbee_network.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rosserial_xbee', 'xbee_network', 'https://github.com/ros-drivers/rosserial', ProgresState::ros_official)
;