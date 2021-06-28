<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/subscribe_self.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'subscribe_self', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('roscpp/pubsub_test', 'test_roscpp', 'TestArray')
	->publish_topic('roscpp/pubsub_test', 'test_roscpp', 'TestArray')
;