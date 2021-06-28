<?php
// file: /tmp/ros_RGD/ros_comm/clients/rospy/src/rospy/rosconsole.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rospy', 'rosconsole', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->subscribe_topic('', '', 'Log')
;