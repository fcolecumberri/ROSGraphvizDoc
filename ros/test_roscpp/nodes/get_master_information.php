<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/get_master_information.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'get_master_information', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic(' topic', 'test_roscpp', 'TestEmpty')
;