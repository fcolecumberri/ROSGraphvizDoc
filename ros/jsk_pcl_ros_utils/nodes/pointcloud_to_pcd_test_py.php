<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros_utils/test/test_pointcloud_to_pcd.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros_utils', 'pointcloud_to_pcd_test_py', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;