<?php
// file: /tmp/ros_RGD/ros_comm/test/test_rospy/nodes/publish_on_shutdown.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_rospy', 'talker', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('chatter', 'std_msgs', 'String')
;