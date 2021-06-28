<?php
// file: /tmp/ros_RGD/common_tutorials/actionlib_tutorials/scripts/gen_numbers.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('actionlib_tutorials', 'random_number_generator', 'https://github.com/ros/common_tutorials', ProgresState::ros_official)
	->publish_topic('random_number', 'std_msgs', 'Float32')
;