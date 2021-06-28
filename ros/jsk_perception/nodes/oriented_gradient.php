<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/src/oriented_gradient_node.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'oriented_gradient', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;