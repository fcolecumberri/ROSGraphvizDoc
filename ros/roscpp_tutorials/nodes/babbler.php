<?php
// file: /tmp/ros_RGD/ros_tutorials/roscpp_tutorials/babbler/babbler.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('roscpp_tutorials', 'babbler', 'https://github.com/ros/ros_tutorials', ProgresState::ros_official)
	->publish_topic('babble', 'std_msgs', 'String')
;