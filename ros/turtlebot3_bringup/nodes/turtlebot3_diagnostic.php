<?php
// file: /tmp/ros_RGD/turtlebot3/turtlebot3_bringup/src/turtlebot3_diagnostics.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('turtlebot3_bringup', 'turtlebot3_diagnostic', 'https://github.com/ROBOTIS-GIT/turtlebot3', ProgresState::ros_official)
	->publish_topic('diagnostics', 'diagnostic_msgs', 'DiagnosticArray')
	->publish_topic('version_info', 'turtlebot3_msgs', 'VersionInfo')
	->subscribe_topic('imu', 'sensor_msgs', 'Imu')
	->subscribe_topic('scan', 'sensor_msgs', 'LaserScan')
	->subscribe_topic('sensor_state', 'turtlebot3_msgs', 'SensorState')
	->subscribe_topic('firmware_version', 'turtlebot3_msgs', 'VersionInfo')
;