<?php
// file: /tmp/ros_RGD/rviz/src/test/send_wrench.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'send_wrench', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('', 'geometry_msgs', 'WrenchStamped')
;