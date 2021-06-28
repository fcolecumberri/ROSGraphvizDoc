<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/sample/random_forest_client_sample.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'random_forest_client', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('~output/debug_image', 'sensor_msgs', 'Image')
	->consume_service('predict', '', 'ClassifyData')
;