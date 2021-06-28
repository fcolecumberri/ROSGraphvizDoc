<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_recognition_utils/node_scripts/static_virtual_camera.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_recognition_utils', 'static_virtual_camera', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~image_color', 'sensor_msgs', 'Image')
	->publish_topic('~image_color/compressed', 'sensor_msgs', 'CompressedImage')
	->publish_topic('~camera_info', 'sensor_msgs', 'CameraInfo')
;