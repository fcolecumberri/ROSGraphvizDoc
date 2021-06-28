<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_recognition_msgs/scripts/people_pose_array_to_pose_array.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_recognition_msgs', 'people_pose_array_to_pose_array', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input', 'jsk_recognition_msgs', 'PeoplePoseArray')
;