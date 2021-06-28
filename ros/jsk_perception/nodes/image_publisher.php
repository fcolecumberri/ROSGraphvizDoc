<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/image_publisher.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'image_publisher', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output', 'jsk_perception', 'Image')
	->publish_topic('~output/camera_info', 'sensor_msgs', 'CameraInfo')
;