<?php
// file: /tmp/ros_RGD/nodelet_core/test_nodelet_topic_tools/test/empty_string_publisher.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_nodelet_topic_tools', 'empty_string_publisher', 'https://github.com/ros/nodelet_core', ProgresState::ros_official)
	->publish_topic('~output', 'std_msgs', 'String')
;