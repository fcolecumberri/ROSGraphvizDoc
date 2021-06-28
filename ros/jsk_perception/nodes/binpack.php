<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/binpack_rect_array.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'binpack', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;