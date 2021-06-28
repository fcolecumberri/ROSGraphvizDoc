<?php
// file: /tmp/ros_RGD/image_pipeline/image_rotate/src/node/image_rotate.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('image_rotate', 'image_rotate', 'https://github.com/ros-perception/image_pipeline', ProgresState::ros_official)
;