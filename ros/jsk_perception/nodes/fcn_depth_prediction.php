<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/fcn_depth_prediction.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'fcn_depth_prediction', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;