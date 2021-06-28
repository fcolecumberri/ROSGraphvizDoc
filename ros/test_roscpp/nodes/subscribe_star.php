<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/subscribe_star.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'subscribe_star', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('test_star_intra', 'test_roscpp', 'TestEmpty')
	->publish_topic('test_star_intra', 'test_roscpp', 'TestEmpty')
	->publish_topic('test_star_intra', 'test_roscpp', 'TestEmpty')
	->publish_topic('test_star_intra', 'test_roscpp', 'TestArray')
	->publish_topic('test_star_intra', 'test_roscpp', 'TestEmpty')
	->publish_topic('test_star_intra', 'test_roscpp', 'TestArray')
	->publish_topic('test_star_intra', 'test_roscpp', 'TestEmpty')
	->publish_topic('test_star_intra', 'test_roscpp', 'TestArray')
;