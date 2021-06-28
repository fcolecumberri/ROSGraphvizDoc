<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/publisher_for_star_subscriber.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'publisher_for_star_subscriber', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('test_star_inter', 'test_roscpp', 'TestEmpty')
	->publish_topic('test_star_inter', 'test_roscpp', 'TestArray')
	->publish_topic('test_star_inter', 'test_roscpp', 'TestEmpty')
;