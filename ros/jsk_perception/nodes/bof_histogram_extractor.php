<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/bof_histogram_extractor.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'bof_histogram_extractor', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;