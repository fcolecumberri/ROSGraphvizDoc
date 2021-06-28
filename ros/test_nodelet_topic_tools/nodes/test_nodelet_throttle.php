<?php
// file: /tmp/ros_RGD/nodelet_core/test_nodelet_topic_tools/test/test_throttle.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_nodelet_topic_tools', 'test_nodelet_throttle', 'https://github.com/ros/nodelet_core', ProgresState::ros_official)
	->publish_topic('string_in', 'std_msgs', 'String')
	->subscribe_topic('string_out', 'std_msgs', 'String')
;