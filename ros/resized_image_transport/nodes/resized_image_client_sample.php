<?php
// file: /tmp/ros_RGD/jsk_recognition/resized_image_transport/scripts/resized_image_client.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('resized_image_transport', 'resized_image_client_sample', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;