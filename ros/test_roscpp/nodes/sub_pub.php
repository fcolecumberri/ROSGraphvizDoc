<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/sub_pub.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'sub_pub', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('roscpp/subpub_test', 'test_roscpp', 'TestArray')
;