<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/fisheye_ray.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'click_to_pose', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output', 'geometry_msgs', 'PoseStamped')
	->publish_topic('~output_point', 'geometry_msgs', 'PointStamped')
	->subscribe_topic('clicked_point', 'geometry_msgs', 'PointStamped')
	->subscribe_topic('camera_info', 'sensor_msgs', 'CameraInfo')
	->subscribe_topic('image', 'sensor_msgs', 'Image')
;