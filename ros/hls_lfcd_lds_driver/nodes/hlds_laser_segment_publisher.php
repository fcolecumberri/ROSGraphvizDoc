<?php
// file: /tmp/ros_RGD/hls_lfcd_lds_driver/src/hlds_laser_segment_publisher.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('hls_lfcd_lds_driver', 'hlds_laser_segment_publisher', 'https://github.com/ROBOTIS-GIT/hls_lfcd_lds_driver', ProgresState::ros_official)
	->publish_topic('scan', 'sensor_msgs', 'LaserScan')
	->publish_topic('rpms', 'std_msgs', 'UInt16')
;