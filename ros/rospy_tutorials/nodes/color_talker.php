<?php
// file: /tmp/ros_RGD/ros_tutorials/rospy_tutorials/009_advanced_publish/advanced_publish.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rospy_tutorials', 'color_talker', 'https://github.com/ros/ros_tutorials', ProgresState::ros_official)
	->publish_topic('', 'std_msgs', 'ColorRGBA')
;