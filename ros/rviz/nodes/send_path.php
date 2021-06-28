<?php
// file: /tmp/ros_RGD/rviz/src/test/send_path.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'send_path', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('', 'nav_msgs', 'Path')
;