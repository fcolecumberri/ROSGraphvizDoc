<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/src/single_nodelet_exec.cpp.in
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', '@DEFAULT_NODE_NAME@', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;