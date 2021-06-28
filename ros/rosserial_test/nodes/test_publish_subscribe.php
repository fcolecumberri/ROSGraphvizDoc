<?php
// file: /tmp/ros_RGD/rosserial/rosserial_test/src/publish_subscribe.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rosserial_test', 'test_publish_subscribe', 'https://github.com/ros-drivers/rosserial', ProgresState::ros_official)
	->publish_topic('chatter', 'std_msgs', 'String')
;