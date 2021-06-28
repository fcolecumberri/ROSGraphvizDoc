<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_recognition_msgs/scripts/object_array_publisher.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_recognition_msgs', 'object_array_publisher', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output', 'jsk_recognition_msgs', 'ObjectArray')
;