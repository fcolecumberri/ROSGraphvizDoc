<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/euslisp/euslaunch.l
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'euslaunch', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;