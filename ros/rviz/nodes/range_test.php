<?php
// file: /tmp/ros_RGD/rviz/src/test/send_range.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'range_test', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('', 'sensor_msgs', 'Range')
;