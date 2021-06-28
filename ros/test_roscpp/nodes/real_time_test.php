<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/real_time_test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'real_time_test', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('/clock', 'rosgraph_msgs', 'Clock')
;