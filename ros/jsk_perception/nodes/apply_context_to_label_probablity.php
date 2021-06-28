<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/apply_context_to_label_probability
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'apply_context_to_label_probablity', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input', 'sensor_msgs', 'Image')
	->subscribe_topic('~input/candidates', 'jsk_recognition_msgs', 'LabelArray')
	->advertise_service('~update_candidates', 'jsk_recognition_msgs', 'SetLabels')
;