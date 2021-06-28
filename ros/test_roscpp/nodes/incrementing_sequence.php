<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/incrementing_sequence.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'incrementing_sequence', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('test_with_header', '', '')
;