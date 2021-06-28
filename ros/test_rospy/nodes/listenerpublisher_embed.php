<?php
// file: /tmp/ros_RGD/ros_comm/test/test_rospy/nodes/listenerpublisher_embed.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_rospy', 'listenerpublisher_embed', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('listenerpublisher', 'test_rospy', 'EmbedTest')
	->subscribe_topic('chatter', 'test_rospy', 'EmbedTest')
;