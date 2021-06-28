<?php
// file: /tmp/ros_RGD/rviz/src/test/send_efforts.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'send_efforts', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('', 'sensor_msgs', 'JointState')
;