<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/wait_for_message.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'wait_for_message', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('test', '', '')
;