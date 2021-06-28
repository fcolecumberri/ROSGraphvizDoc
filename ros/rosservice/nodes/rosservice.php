<?php
// file: /tmp/ros_RGD/ros_comm/tools/rosservice/src/rosservice/__init__.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rosservice', 'rosservice', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->consume_service('', '', 'service_class')
;