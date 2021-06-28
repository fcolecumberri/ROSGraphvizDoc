<?php
// file: /tmp/ros_RGD/image_pipeline/camera_calibration/nodes/cameracalibrator.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('camera_calibration', 'cameracalibrator', 'https://github.com/ros-perception/image_pipeline', ProgresState::ros_official)
;