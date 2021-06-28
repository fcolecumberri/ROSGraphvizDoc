<?php
// file: /tmp/ros_RGD/rviz/src/test/posearray.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'posearray', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('', 'geometry_msgs', 'PoseArray')
;