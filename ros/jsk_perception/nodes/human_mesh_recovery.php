<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_perception/node_scripts/human_mesh_recovery.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_perception', 'human_mesh_recovery', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input', 'sensor_msgs', 'Image')
;