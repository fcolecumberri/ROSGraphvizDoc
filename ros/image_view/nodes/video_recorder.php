<?php
// file: /tmp/ros_RGD/image_pipeline/image_view/src/nodes/video_recorder.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('image_view', 'video_recorder', 'https://github.com/ros-perception/image_pipeline', ProgresState::ros_official)
;