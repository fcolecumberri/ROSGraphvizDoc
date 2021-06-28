<?php
// file: /tmp/ros_RGD/image_pipeline/camera_calibration/nodes/cameracheck.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('camera_calibration', 'cameracheck', 'https://github.com/ros-perception/image_pipeline', ProgresState::ros_official)
;