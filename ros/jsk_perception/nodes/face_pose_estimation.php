<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/face_pose_estimation.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'face_pose_estimation', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;