<?php
// file: /tmp/ros_RGD/image_pipeline/stereo_image_proc/src/nodes/stereo_image_proc.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('stereo_image_proc', 'stereo_image_proc', 'https://github.com/ros-perception/image_pipeline', ProgresState::ros_official)
;