<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/fast_rcnn.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'fast_rcnn_caffenet', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;