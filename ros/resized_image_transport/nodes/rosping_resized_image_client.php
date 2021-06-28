<?php
// file: /tmp/ros_RGD/jsk_recognition/resized_image_transport/scripts/rosping_ric.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('resized_image_transport', 'rosping_resized_image_client', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('', 'std_msgs', 'Float64')
;