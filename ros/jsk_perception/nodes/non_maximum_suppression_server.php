<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/non_maximum_suppression.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'non_maximum_suppression_server', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input', 'jsk_recognition_msgs', 'RectArray')
	->advertise_service('non_maximum_suppression', 'jsk_perception', 'NonMaximumSuppression')
;