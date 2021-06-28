<?php
// file: /tmp/ros_RGD/ros_comm/test/test_roscpp/test/src/stamped_topic_statistics_empty_timestamp.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_roscpp', 'stamped_topic_statistics_empty_timestamp', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('test_with_empty_timestamp', 'test_roscpp', 'TestWithHeader')
;