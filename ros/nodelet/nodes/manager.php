<?php
// file: /tmp/ros_RGD/nodelet_core/nodelet/src/nodelet.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('nodelet', 'manager', 'https://github.com/ros/nodelet_core', ProgresState::ros_official)
	->consume_service('', 'nodelet', 'NodeletUnload')
	->consume_service('', 'nodelet', 'NodeletLoad')
;