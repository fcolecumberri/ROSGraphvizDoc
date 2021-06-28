<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/src/camshiftdemo.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'camshiftdemo', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('result', 'jsk_recognition_msgs', 'RotatedRectStamped')
	->advertise_service('set_roi', 'sensor_msgs', 'SetCameraInfo')
;