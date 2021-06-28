<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/publish_n_fast.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'publish_n_fast', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('roscpp/pubsub_test', 'test_roscpp', 'TestArray')
;