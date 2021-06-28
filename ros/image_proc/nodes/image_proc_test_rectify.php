<?php
// file: /tmp/ros_RGD/image_pipeline/image_proc/test/test_rectify.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('image_proc', 'image_proc_test_rectify', 'https://github.com/ros-perception/image_pipeline', ProgresState::ros_official)
;