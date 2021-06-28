<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/test/test_sparse_image.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'sparse_image_test_py', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->publish_topic('/test_edge_image', 'sensor_msgs', 'Image')
	->subscribe_topic('', 'sensor_msgs', 'Image')
;