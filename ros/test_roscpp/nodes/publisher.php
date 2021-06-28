<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/publisher.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'publisher', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('data', 'std_msgs', 'Int8MultiArray')
;