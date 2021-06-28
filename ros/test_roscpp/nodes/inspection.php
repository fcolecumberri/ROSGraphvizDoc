<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/inspection.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'inspection', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('topic', 'test_roscpp', 'TestArray')
	->publish_topic('ns/topic', 'test_roscpp', 'TestArray')
	->publish_topic('/global/topic', 'test_roscpp', 'TestArray')
;