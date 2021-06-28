<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/random_forest_server.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'random_forest_cloth_classifier', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->advertise_service('predict', '', 'ClassifyData')
;