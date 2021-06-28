<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/src/linemod.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'linemod', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;