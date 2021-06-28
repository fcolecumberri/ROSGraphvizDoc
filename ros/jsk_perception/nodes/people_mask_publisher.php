<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/people_mask_publisher.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'people_mask_publisher', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;