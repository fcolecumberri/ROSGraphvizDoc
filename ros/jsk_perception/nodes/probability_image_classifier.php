<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/probability_image_classifier.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'probability_image_classifier', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;