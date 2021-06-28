<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_recognition_utils/node_scripts/add_bounding_box_array.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_recognition_utils', 'add_bounding_box_array', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;