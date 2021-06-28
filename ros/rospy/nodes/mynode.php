<?php
// file: /tmp/ros_RGD/ros_comm/clients/rospy/src/rospy/numpy_msg.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rospy', 'mynode', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('mytopic', '', 'numpy_msg(TopicType')
	->subscribe_topic('mytopic', '', 'numpy_msg(TopicType')
;