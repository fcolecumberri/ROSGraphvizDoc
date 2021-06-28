<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_recognition_utils/src/tests/test_tf_listener_singleton.cpp
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_recognition_utils', 'simple_lookup_transform', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;