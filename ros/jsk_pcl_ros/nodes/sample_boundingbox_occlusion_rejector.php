<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_boundingbox_occlusion_rejector.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'sample_boundingbox_occlusion_rejector', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output/target_boxes', 'jsk_recognition_msgs', 'BoundingBoxArray')
	->publish_topic('~output/candidate_boxes', 'jsk_recognition_msgs', 'BoundingBoxArray')
	->subscribe_topic('~input', 'sensor_msgs', 'CameraInfo')
	->subscribe_topic('~input/candidate_pose', 'geometry_msgs', 'PoseStamped')
;