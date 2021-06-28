<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/left_right.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'left_right', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('left', 'std_msgs', 'String')
	->publish_topic('right', 'std_msgs', 'String')
;