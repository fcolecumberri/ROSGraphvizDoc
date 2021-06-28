<?php
// file: /tmp/ros_RGD/ros_comm/test/test_rostest/test/just_advertise
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('test_rostest', 'just_advertise', 'https://github.com/ros/ros_comm', ProgresState::ros_official)
	->publish_topic('~output', '', 'msg_class')
;