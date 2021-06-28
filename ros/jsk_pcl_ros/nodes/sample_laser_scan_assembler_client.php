<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/sample/sample_laser_scan_assembler_client.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'sample_laser_scan_assembler_client', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output', 'sensor_msgs', 'PointCloud2')
	->consume_service('~assemble_scans2', 'laser_assembler', 'AssembleScans2')
;