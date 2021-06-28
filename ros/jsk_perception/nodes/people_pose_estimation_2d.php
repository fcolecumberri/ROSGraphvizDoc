<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/people_pose_estimation_2d.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'people_pose_estimation_2d', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input/info', 'sensor_msgs', 'CameraInfo')
	->subscribe_topic('~input', 'sensor_msgs', 'Image')
;