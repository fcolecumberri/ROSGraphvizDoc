<?php
// file: /tmp/ros_RGD/image_common/image_transport/src/republish.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('image_transport', 'image_republisher', 'https://github.com/ros-perception/image_common', ProgresState::ros_official)
;