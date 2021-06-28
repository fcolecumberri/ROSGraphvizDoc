<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/image_cluster_indices_decomposer.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'image_cluster_indices_decomposer', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
;