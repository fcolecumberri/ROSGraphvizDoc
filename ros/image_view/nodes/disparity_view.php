<?php
// file: /tmp/ros_RGD/image_pipeline/image_view/src/nodes/disparity_view.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('image_view', 'disparity_view', 'https://github.com/ros-perception/image_pipeline', ProgresState::ros_official)
;