<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/scripts/detect_graspable_poses_pcabase.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'detect_graspable_poses_pcabase', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input', 'sensor_msgs', 'PointCloud2')
;