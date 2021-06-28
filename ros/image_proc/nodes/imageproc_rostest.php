<?php
// file: /tmp/ros_RGD/image_pipeline/image_proc/test/rostest.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('image_proc', 'imageproc_rostest', 'https://github.com/ros-perception/image_pipeline', ProgresState::ros_official)
;