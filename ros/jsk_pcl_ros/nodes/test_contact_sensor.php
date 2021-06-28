<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_pcl_ros/scripts/test_contact_sensor.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_pcl_ros', 'test_contact_sensor', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('contact_sensors_in', 'jsk_recognition_msgs', 'ContactSensorArray')
;