<?php
// file: /tmp/ros_RGD/jsk_recognition/jsk_recognition_msgs/scripts/save_mesh_server.py
include_once(dirname(__FILE__)."/../../../RGDcore/RGD.php");
RGD::node('jsk_recognition_msgs', 'save_mesh_server', 'http://github.com/jsk-ros-pkg/jsk_recognition', ProgresState::ros_official)
	->subscribe_topic('~input/bbox', 'jsk_recognition_msgs', 'BoundingBox')
	->advertise_service('~request', 'std_srvs', 'Empty')
	->consume_service('~save_mesh', 'jsk_recognition_msgs', 'SaveMesh')
;