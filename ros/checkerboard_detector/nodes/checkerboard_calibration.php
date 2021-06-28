<?php
// file: /tmp/ros_RGD/jsk_recognition/checkerboard_detector/src/checkerboard_calibration.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('checkerboard_detector', 'checkerboard_calibration', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;