<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/label_image_decomposer.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'label_image_decomposer', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;