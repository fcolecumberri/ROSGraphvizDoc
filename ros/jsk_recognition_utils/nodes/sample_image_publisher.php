<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_recognition_utils/sample/sample_image_publisher.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_recognition_utils', 'sample_image_publisher', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output/image_raw', 'sensor_msgs', 'Image')
	->publish_topic('~output/camera_info', 'sensor_msgs', 'CameraInfo')
;