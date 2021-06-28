<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/sklearn_classifier.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'sklearn_classifier', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input', 'jsk_recognition_msgs', 'VectorArray')
;