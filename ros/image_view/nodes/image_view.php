<?php
// file: /tmp/ros_RGD/image_pipeline/image_view/src/nodes/image_view.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('image_view', 'image_view', 'https://github.com/ros-perception/image_pipeline', ProgresState::ros_official)
;