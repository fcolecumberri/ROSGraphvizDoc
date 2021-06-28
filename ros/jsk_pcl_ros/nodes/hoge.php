<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/test/hsv_listener.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'hoge', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('input', 'sensor_msgs', 'PointCloud2')
;