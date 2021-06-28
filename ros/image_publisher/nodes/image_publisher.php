<?php
// file: /tmp/ros_RGD/image_pipeline/image_publisher/src/node/image_publisher.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('image_publisher', 'image_publisher', 'https://github.com/ros-perception/image_pipeline', ProgresState::ros_official)
;