<?php
// file: /tmp/ros_RGD/rviz/src/test/send_pose.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'send_pose', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('', 'geometry_msgs', 'PoseStamped')
;