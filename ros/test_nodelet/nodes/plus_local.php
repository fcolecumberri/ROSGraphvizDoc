<?php
// file: /tmp/ros_RGD/nodelet_core/test_nodelet/test/plus_local.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_nodelet', 'plus_local', 'https://github.com/ros/nodelet_core', ProgresState::ros_official)
	->publish_topic('', 'std_msgs', 'Float64')
	->subscribe_topic('', 'std_msgs', 'Float64')
;