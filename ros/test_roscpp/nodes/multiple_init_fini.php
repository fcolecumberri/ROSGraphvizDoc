<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/multiple_init_fini.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'multiple_init_fini', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('test2', 'test_roscpp', 'TestArray')
;