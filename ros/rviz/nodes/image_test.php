<?php
// file: /tmp/ros_RGD/rviz/src/test/image_test.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('rviz', 'image_test', 'https://github.com/ros-visualization/rviz', ProgresState::ros_official)
	->publish_topic('red_image', 'sensor_msgs', 'Image')
;