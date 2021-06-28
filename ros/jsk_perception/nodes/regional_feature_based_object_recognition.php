<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/regional_feature_based_object_recognition.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'regional_feature_based_object_recognition', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;