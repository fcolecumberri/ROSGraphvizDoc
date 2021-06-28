<?php
// file: /tmp/ros_RGD/image_pipeline/image_view/src/nodes/extract_images.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('image_view', 'extract_images', 'https://github.com/ros-perception/image_pipeline', ProgresState::ros_official)
;