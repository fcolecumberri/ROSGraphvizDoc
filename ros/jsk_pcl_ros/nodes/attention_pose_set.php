<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/attention_pose_set.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'attention_pose_set', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('/attention_clipper/input/box_array', 'jsk_recognition_msgs', 'BoundingBoxArray')
;