<?php
// file: /tmp/ros_RGD/ros_comm/tools/rosnode/test_nodes/listener.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rosnode', 'listener', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->subscribe_topic('chatter', 'std_msgs', 'String')
;