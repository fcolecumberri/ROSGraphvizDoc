<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/scripts/extract_top_polygon_likelihood.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'extract_top_polygon_likelihood', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;