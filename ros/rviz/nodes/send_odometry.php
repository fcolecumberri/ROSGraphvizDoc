<?php
// file: /tmp/ros_RGD/rviz/src/test/send_odometry.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'send_odometry', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('', 'nav_msgs', 'Odometry')
;