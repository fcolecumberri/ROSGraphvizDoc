<?php
// file: /tmp/ros_RGD/common_tutorials/actionlib_tutorials/src/averaging_server.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('actionlib_tutorials', 'averaging', 'https://github.com/ros/common_tutorials', ProgresState::ros_official)
	->subscribe_topic('/random_number', 'std_msgs', 'Float32')
;