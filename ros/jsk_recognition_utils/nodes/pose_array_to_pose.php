<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_recognition_utils/node_scripts/pose_array_to_pose.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_recognition_utils', 'pose_array_to_pose', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input', 'geometry_msgs', 'PoseArray')
;