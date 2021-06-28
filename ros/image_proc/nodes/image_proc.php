<?php
// file: /tmp/ros_RGD/image_pipeline/image_proc/src/nodes/image_proc.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('image_proc', 'image_proc', 'https://github.com/ros-perception/image_pipeline', ProgresState::ros_official)
;